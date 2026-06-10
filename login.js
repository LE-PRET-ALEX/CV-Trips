document.addEventListener("DOMContentLoaded", () => {
    const createAccountButton = document.getElementById("create_account_button");

    createAccountButton.addEventListener("click", () => {
        window.location.href = "create_account.php";
    });
});