<?php
session_start();
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
if(hash_equals(apache_getenv('AUTH_USER'), $user) &&
   password_verify($pass, file('/etc/httpd/.htpasswd')[1])) {
    $_SESSION['authed'] = true;
    header('Location: /vicidial/admin.php');
} else {
    echo "Login failed. <a href='/lockdown/index.php'>Try again</a>";
}
