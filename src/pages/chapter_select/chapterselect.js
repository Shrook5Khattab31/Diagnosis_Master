const filterState = {
  search: "",
  level: "all",
  status: "all"
};

localStorage.setItem("currentCourse", "anatomy");


function toggleMenu(id, event) {
  event.stopPropagation();

  const menu = document.getElementById(id);

  document.querySelectorAll(".menu").forEach(m => {
    if (m.id !== id) m.style.display = "none";
  });

  menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

function selectItem(type, value) {

  const normalized = value.toLowerCase();

  if (type === "level") {
    document.getElementById("levelText").innerText = value;
    document.getElementById("levelMenu").style.display = "none";

    filterState.level = normalized;
  }

  if (type === "status") {
    document.getElementById("statusText").innerText = value;
    document.getElementById("statusMenu").style.display = "none";

    filterState.status = normalized;
  }

  applyFilters();
}

document.addEventListener("click", function () {
  document.querySelectorAll(".menu").forEach(menu => {
    menu.style.display = "none";
  });
});

const searchInput = document.getElementById("searchInput");
const notFound = document.getElementById("notFound");

searchInput.addEventListener("input", function () {
  filterState.search = this.value.toLowerCase().trim();
  applyFilters();
});



function applyFilters() {
  const cards = document.querySelectorAll(".card");
  let hasResult = false;

  cards.forEach(card => {

    const text = card.innerText.toLowerCase();

    const statusEl = card.querySelector(".status");
    const isDone = statusEl.classList.contains("done");
    const isLocked = statusEl.classList.contains("locked");

    const level = card.dataset.level || "beginner";

    // search
    const matchSearch = text.includes(filterState.search);

    // status
 let matchStatus = true;

if (filterState.status === "completed") {
  matchStatus = isDone;
} 
else if (filterState.status === "locked") {
  matchStatus = isLocked;
} 
else if (filterState.status === "in progress") {
  matchStatus = !isDone && !isLocked;
}
else if (filterState.status === "all") {
  matchStatus = true;
}

    // level
    const matchLevel =
  filterState.level === "all" ||
  level === filterState.level;

    const show = matchSearch && matchStatus && matchLevel;

    card.style.display = show ? "flex" : "none";

    if (show) hasResult = true;
  });

  document.getElementById("notFound").style.display =
    hasResult ? "none" : "block";
}