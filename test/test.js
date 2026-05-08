function toggleMenu(id, event) {
  event.stopPropagation();

  const menu = document.getElementById(id);

  document.querySelectorAll(".menu").forEach(m => {
    if (m.id !== id) m.style.display = "none";
  });

  menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

function selectItem(type, value) {

  if (type === "level") {
    document.getElementById("levelText").innerText = value;
    document.getElementById("levelMenu").style.display = "none";
  }

  if (type === "status") {
    document.getElementById("statusText").innerText = value;
    document.getElementById("statusMenu").style.display = "none";

    filterByStatus(value);
  }
}

document.addEventListener("click", function () {
  document.querySelectorAll(".menu").forEach(menu => {
    menu.style.display = "none";
  });
});

const searchInput = document.getElementById("searchInput");
const notFound = document.getElementById("notFound");

searchInput.addEventListener("input", function () {
  const value = searchInput.value.toLowerCase().trim();

  const cards = document.querySelectorAll(".card");

  let hasResult = false;

  cards.forEach(card => {
   const text = card.innerText.toLowerCase();

    if (text.includes(value)) {
      card.style.display = "flex";
      hasResult = true;
    } else {
      card.style.display = "none";
    }
  });


  if (!hasResult) {
    notFound.style.display = "block";
  } else {
    notFound.style.display = "none";
  }
});

function filterByStatus(statusValue) {
  const cards = document.querySelectorAll(".card");

  cards.forEach(card => {
    const status = card.querySelector(".status");

    if (statusValue === "Completed" && status.classList.contains("done")) {
      card.style.display = "flex";

    } else if (statusValue === "Locked" && status.classList.contains("locked")) {
      card.style.display = "flex";

    } else if (statusValue === "In Progress" && !status.classList.contains("done") && !status.classList.contains("locked")) {
      card.style.display = "flex";

    } else {
      card.style.display = "none";
    }
  });
}