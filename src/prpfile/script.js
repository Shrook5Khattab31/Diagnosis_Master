const editBtn = document.querySelector(".edit");
const saveBtn = document.querySelector(".save");
const cancelBtn = document.querySelector(".cancel");
const infoBox = document.querySelector(".info");


// 🔵 فتح الفورم
editBtn.onclick = function () {

  infoBox.style.display = "block";

  saveBtn.style.display = "inline-block";
  cancelBtn.style.display = "inline-block";
};


// 🟢 حفظ
saveBtn.onclick = function () {

  alert("Changes saved");

  infoBox.style.display = "none";

  saveBtn.style.display = "none";
  cancelBtn.style.display = "none";
};


// 🔴 إلغاء
cancelBtn.onclick = function () {

  alert("Cancelled");

  infoBox.style.display = "none";

  saveBtn.style.display = "none";
  cancelBtn.style.display = "none";
};
// العناصر مرة واحدة فقط
const editIcon = document.querySelector(".edit-icon");
const popup = document.getElementById("popup");
const closeBtn = document.getElementById("closeBtn");

const fileInput = document.getElementById("fileInput");
const mainImage = document.getElementById("mainImage");
const profileImage = document.getElementById("profileImage");

const uploadBtn = document.getElementById("uploadBtn");

const avatarCards = document.querySelectorAll(".avatar-card img");
const allCards = document.querySelectorAll(".avatar-card");


// فتح popup
editIcon.addEventListener("click", function () {
    popup.style.display = "flex";
});

closeBtn.addEventListener("click", function () {
    popup.style.display = "none";
});


editIcon.addEventListener("click", () => {
    popup.style.display = "flex";
});

uploadBtn.addEventListener("click", () => {
    fileInput.click();
});


// تغيير الصورة (برا + جوه)
fileInput.addEventListener("change", (e) => {

    const file = e.target.files[0];

    if (file) {

        const imageURL = URL.createObjectURL(file);

        mainImage.src = imageURL;
        profileImage.src = imageURL;

    }

});


// اختيار من الصور الجاهزة
avatarCards.forEach((img) => {

    img.addEventListener("click", () => {

        const imageURL = img.src;

        mainImage.src = imageURL;
        profileImage.src = imageURL;

        allCards.forEach(card => {

            card.classList.remove("selected");

            if (card.querySelector("span")) {
                card.querySelector("span").remove();
            }

        });

        const parent = img.parentElement;
        parent.classList.add("selected");

        const text = document.createElement("span");
        text.innerText = "Selected";
        parent.appendChild(text);

    });

});
