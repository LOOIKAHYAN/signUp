function logout() {
    if (confirm("Are you sure to logout?")) {
        window.location.href="../login/login.php";
        exit;
    }
}