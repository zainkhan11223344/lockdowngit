<?php session_start(); ?>
<!DOCTYPE html>
<html><head><title>Login Firewall</title>
<style>
    body {
      background-color: #1a1a1a;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 100px;
    }
    input {
      padding: 10px;
      margin: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

</style>
</head>
<body>
<?php if(isset($_SESSION['authed'])):
    header('Location: /vicidial/admin.php'); exit;
endif; ?>
<form action="authenticate.php" method="post">
    Username: <input name="user"><br>
    Password: <input type="password" name="pass"><br>
    <button>Login</button>
</form>
</body></html>
