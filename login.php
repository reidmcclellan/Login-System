<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  $stmt = $pdo->prepare('SELECT password FROM users WHERE username = ?');
  $stmt->execute([$username]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($row && password_verify($password, $row['password'])) 
  {
    $_SESSION['user']          = $username;
    $_SESSION['LAST_ACTIVITY'] = time();
    header('Location: admin.php');
    exit;
  } else 
  {
    header('Location: error.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form method="post" action="login.php">
    <label>Username:
      <input type="text" name="username" required>
    </label><br><br>
    <label>Password:
      <input type="password" name="password" required>
    </label><br><br>
    <button type="submit">Log In</button>
  </form>
</body>
</html>
