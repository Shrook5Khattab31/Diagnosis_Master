const mainImage = document.getElementById("mainImage");

const avatarCards = document.querySelectorAll(".avatar-card img");

const allCards = document.querySelectorAll(".avatar-card");


// change big image
avatarCards.forEach((img)=>{

    img.addEventListener("click", ()=>{

        // change main image
        mainImage.src = img.src;

        // remove selected from all
        allCards.forEach(card=>{

            card.classList.remove("selected");

            if(card.querySelector("span")){
                card.querySelector("span").remove();
            }

        });

        // add selected
        const parent = img.parentElement;

        parent.classList.add("selected");

        const text = document.createElement("span");

        text.innerText = "Selected";

        parent.appendChild(text);

    });

});


// upload from device
const uploadBtn = document.getElementById("uploadBtn");

const fileInput = document.getElementById("fileInput");


uploadBtn.addEventListener("click", ()=>{

    fileInput.click();

});


// choose image
fileInput.addEventListener("change", (e)=>{

    const file = e.target.files[0];

    if(file){

        const imageURL = URL.createObjectURL(file);

        mainImage.src = imageURL;

    }

});