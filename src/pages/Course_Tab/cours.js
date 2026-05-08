let modal = document.getElementById("codeModal");
let closeBtn = document.querySelector(".close");

// Anatomy
let anatomyCard = document.querySelector(".anatomy-card");

anatomyCard.addEventListener("click", function () {
  modal.style.display = "flex";
});

// Test
let testCard = document.querySelector(".test-card");

testCard.addEventListener("click", function () {
  alert("Test Card");
});

// Therapeutic
let therapeuticCard = document.querySelector(".therapeutic-card");

therapeuticCard.addEventListener("click", function () {
  alert("Therapeutic Card");
});

// Hydro
let hydroCard = document.querySelector(".hydro-card");

hydroCard.addEventListener("click", function () {
  alert("Hydro Card");
});

// قفل الـ modal
closeBtn.onclick = function () {
  modal.style.display = "none";
};

// قفل لما تدوسي برا
window.onclick = function (e) {
  if (e.target == modal) {
    modal.style.display = "none";
  }
};
let allTab = document.getElementById("allTab");
let completedTab = document.getElementById("completedTab");

let allCards = document.querySelectorAll(".card");

// مفيش كورسات مكتملة حاليًا
let completedCards = document.querySelectorAll(".completed-course");

// تحديث الأرقام
document.getElementById("allCount").innerText = allCards.length;
document.getElementById("completedCount").innerText = completedCards.length;

// ALL
allTab.addEventListener("click", function () {
  allTab.classList.add("active");
  completedTab.classList.remove("active");

  allCards.forEach(card => {
    card.style.display = "flex";
  });
});

// COMPLETED
completedTab.addEventListener("click", function () {
  completedTab.classList.add("active");
  allTab.classList.remove("active");

  // إخفاء الكل
  allCards.forEach(card => {
    card.style.display = "none";
  });

  // لو مفيش أي كورس مكتمل
  if (completedCards.length === 0) {
    document.getElementById("emptyMessage").style.display = "block";
  } else {
    completedCards.forEach(card => {
      card.style.display = "flex";
    });
  }
});
let emptyMessage = document.getElementById("emptyMessage");

completedTab.addEventListener("click", function () {

  completedTab.classList.add("active");
  allTab.classList.remove("active");

  allCards.forEach(card => {
    card.style.display = "none";
  });

  if (completedCards.length === 0) {
    emptyMessage.style.display = "block";
  } else {
    emptyMessage.style.display = "none";
    completedCards.forEach(card => {
      card.style.display = "flex";
    });
  }
});

allTab.addEventListener("click", function () {
  emptyMessage.style.display = "none";

  allCards.forEach(card => {
    card.style.display = "flex";
  });
});
function completeCourse(card) {
  card.setAttribute("data-progress", "100");
  card.classList.add("completed-course");

  updateCompleted();
}
document.querySelectorAll(".card").forEach(card => {

  let seeMore = card.querySelector(".see-more");
  let moreText = card.querySelector(".more-text");

  if (seeMore && moreText) {
    seeMore.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();

      if (moreText.style.display === "block") {
        moreText.style.display = "none";
        seeMore.innerText = "see more";
      } else {
        moreText.style.display = "block";
        seeMore.innerText = "see less";
      }
    });
  }

});