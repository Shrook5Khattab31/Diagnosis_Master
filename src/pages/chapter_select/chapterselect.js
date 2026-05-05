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
  }
}

document.addEventListener("click", function () {
  document.querySelectorAll(".menu").forEach(menu => {
    menu.style.display = "none";
  });
});