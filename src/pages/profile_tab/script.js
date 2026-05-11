const editBtn    = document.querySelector(".edit");
const saveBtn    = document.querySelector(".save");
const cancelBtn  = document.querySelector(".cancel");
const infoBox    = document.querySelector(".info");
const picInput   = document.getElementById("picInput");

var isEditing = false;   // ← tracks if edit mode is on

// Open + unlock
editBtn.onclick = function () {
    isEditing = true;
    infoBox.style.display   = "block";
    saveBtn.style.display   = "inline-block";
    cancelBtn.style.display = "inline-block";

    infoBox.querySelectorAll("input, select").forEach(function (el) {
        el.removeAttribute("readonly");
        el.removeAttribute("disabled");
    });
};

// Cancel
cancelBtn.onclick = function () {
    window.location.reload();
};

// ── Avatar popup ─────────────────────────────────────────────
const editIcon     = document.querySelector(".edit-icon");
const popup        = document.getElementById("popup");
const closeBtn     = document.getElementById("closeBtn");
const fileInput    = document.getElementById("fileInput");
const uploadBtn    = document.getElementById("uploadBtn");
const mainImage    = document.getElementById("mainImage");
const profileImage = document.getElementById("profileImage");
const avatarCards  = document.querySelectorAll(".avatar-card img");
const allCards     = document.querySelectorAll(".avatar-card");

editIcon.addEventListener("click", function () {
    if (!isEditing) return;   // ← blocked until Edit is pressed
    popup.style.display = "flex";
});

closeBtn.addEventListener("click", function () {
    popup.style.display = "none";
});

popup.addEventListener("click", function (e) {
    if (e.target === popup) popup.style.display = "none";
});

uploadBtn.addEventListener("click", function () {
    fileInput.click();
});

fileInput.addEventListener("change", function (e) {
    var file = e.target.files[0];
    if (file) {
        var imageURL     = URL.createObjectURL(file);
        mainImage.src    = imageURL;
        profileImage.src = imageURL;
        picInput.value   = file.name;
    }
});

avatarCards.forEach(function (img) {
    img.addEventListener("click", function () {
        var imageURL     = img.src;
        mainImage.src    = imageURL;
        profileImage.src = imageURL;
        picInput.value   = imageURL.split("/").pop();

        popup.style.display = "none";

        allCards.forEach(function (card) {
            card.classList.remove("selected");
            var sp = card.querySelector("span");
            if (sp) sp.remove();
        });
        var parent = img.parentElement;
        parent.classList.add("selected");
        var text = document.createElement("span");
        text.innerText = "Selected";
        parent.appendChild(text);
    });
});