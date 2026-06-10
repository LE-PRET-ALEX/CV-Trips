document.addEventListener("DOMContentLoaded", () => {

    const showPasswordCheckbox = document.getElementById("show_password_checkbox");

    const passwordInputs = document.querySelectorAll('input[type="password"]');

    showPasswordCheckbox.addEventListener("change", () => {

        passwordInputs.forEach(input => {

            if (showPasswordCheckbox.checked) {
                input.type = "text";
            } else {
                input.type = "password";
            }

        });

    });

});