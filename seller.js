
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const passwordInput = document.getElementById("password");

    const showPasswordToggle = document.createElement("input");
    showPasswordToggle.type = "checkbox";
    showPasswordToggle.id = "togglePassword";

    const toggleLabel = document.createElement("label");
    toggleLabel.htmlFor = "togglePassword";
    toggleLabel.textContent = " Show Password";

    passwordInput.parentNode.appendChild(showPasswordToggle);
    passwordInput.parentNode.appendChild(toggleLabel);

    showPasswordToggle.addEventListener("change", function () {
        passwordInput.type = this.checked ? "text" : "password";
    });

    form.addEventListener("submit", function (e) {
        const establishedYear = document.getElementById("established").value;
        const year = parseInt(establishedYear);
        const currentYear = new Date().getFullYear();

        if (year < 1900 || year > currentYear) {
            alert("Please enter a valid Established Year between 1900 and " + currentYear + ".");
            e.preventDefault();
            return;
        }

        
        let allValid = true;
        const requiredFields = form.querySelectorAll("[required]");
        requiredFields.forEach(field => {
            if (!field.value || (field.type === "checkbox" && !field.checked)) {
                field.style.borderColor = "red";
                setTimeout(() => {
                    field.style.borderColor = "#ccc";
                }, 1500);
                allValid = false;
            }
        });

        if (!allValid) {
            alert("Please fill out all required fields.");
            e.preventDefault();
            return;
        }

        
        const confirmSubmit = confirm("Do you want to submit the registration form?");
        if (!confirmSubmit) {
            e.preventDefault();
        }
    });
});
