function validateForm() {
    let isValid = true;

   
    document.querySelectorAll('.error').forEach(el => el.innerHTML = '');

    const name = document.forms["myForm"]["name"].value.trim();
    const email = document.forms["myForm"]["email"].value.trim();
    const phone = document.forms["myForm"]["phone"].value.trim();
    const shopName = document.forms["myForm"]["shop_name"].value.trim();
    const password = document.forms["myForm"]["password"].value;
    const established = document.forms["myForm"]["established"].value;
    const category = document.forms["myForm"]["categories"].value;
    const terms = document.forms["myForm"]["terms"].checked;
    const shopTypes = document.forms["myForm"]["shop_type"];

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^[0-9]{11}$/;

    if (name === "") {
        document.getElementById("nameError").innerHTML = "Full Name is required.";
        isValid = false;
    }

    if (email === "") {
        document.getElementById("emailError").innerHTML = "Email is required.";
        isValid = false;
    } else if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Invalid email format.";
        isValid = false;
    }

    if (phone === "") {
        document.getElementById("phoneError").innerHTML = "Phone number is required.";
        isValid = false;
    } else if (!phonePattern.test(phone)) {
        document.getElementById("phoneError").innerHTML = "Phone must be 11 digits.";
        isValid = false;
    }

    if (shopName === "") {
        document.getElementById("shopNameError").innerHTML = "Bookshop Name is required.";
        isValid = false;
    }

    if (password.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    }

    if (![...shopTypes].some(r => r.checked)) {
        document.getElementById("shopTypeError").innerHTML = "Please select a shop type.";
        isValid = false;
    }

    if (established === "") {
        document.getElementById("establishedError").innerHTML = "Established year is required.";
        isValid = false;
    }

    if (category === "") {
        document.getElementById("categoryError").innerHTML = "Please select a book category.";
        isValid = false;
    }

    if (!terms) {
        document.getElementById("termsError").innerHTML = "You must accept the terms & conditions.";
        isValid = false;
    }

    return isValid;
}
