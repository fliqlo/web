const form = document.getElementById('loginForm');
const errorMsg = document.getElementById('errorMsg');

form.addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'admin' && password === 'l340') {
        errorMsg.style.color = "green";
        errorMsg.textContent = "Login successful!";
        window.open("http://localhost/web/home-server/wmo/index.html", "_self");
        // You can redirect or show another page here if needed
    } else {
        errorMsg.style.color = "red";
        errorMsg.textContent = "Invalid username or password.";
    }
});
