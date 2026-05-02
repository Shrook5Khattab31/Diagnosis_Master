function togglePass(id, icon) {
    let input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    }
}

function updatePassword() {
    let pass = document.getElementById("password").value;
    let confirm = document.getElementById("confirmPassword").value;
    let message = document.getElementById("message");

    if (pass === "" || confirm === "") {
        message.innerText = "Please fill all fields";
        message.style.color = "red";
        return;
    }

    if (pass !== confirm) {
        message.innerText = "Passwords do not match";
        message.style.color = "red";
        return;
    }

    // الباسورد صحيح
    message.innerText = "Password Updated Successfully";
    message.style.color = "green";

    // عرض Popup الصورة
    const popup = document.getElementById("successPopup");
    popup.style.display = "flex";

    // إغلاق popup عند الضغط عليها وتحويل المستخدم لصفحة تسجيل الدخول
    popup.onclick = function () {
        this.style.display = "none";
        window.location.href = "login.php"; // عدلي حسب صفحة تسجيل الدخول عندك
    };
}

// ربط الزرار بالدالة
const updateBtn = document.getElementById("updateBtn");
updateBtn.addEventListener("click", updatePassword);





//salma
