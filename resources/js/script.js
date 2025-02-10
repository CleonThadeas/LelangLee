document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let errorMessage = document.getElementById('errorMessage');

    if (username === "admin" && password === "1234") {
        alert("Login berhasil! Selamat datang di LelangLee.");
        window.location.href = "dashboard.html"; // Redirect ke dashboard
    } else {
        errorMessage.textContent = "Username atau password salah!";
    }
});
