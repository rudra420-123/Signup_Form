let login = document.getElementById('login');
let first = document.getElementById('first');
let btn = document.getElementById('btn');
login.addEventListener("btn", (e) => {
    if (!(first.checkVisibility())) {
        first.reportValidity();
        e.preventDefault();
    } else {
        first.setCustomValidity("");
        alert("SignUp Successfully");
        e.preventDefault();
    }
});