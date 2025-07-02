<?php
session_start();

if (empty($_SESSION['user'])) 
{
  header('Location: login.php');
  exit;
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) 
{
  session_unset();
  session_destroy();
  header('Location: login.php');
  exit;
}

$_SESSION['LAST_ACTIVITY'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
</head>
<body>
  <h1>Welcome, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
  <p>This is the protected Admin page.</p>
  <form action="logout.php" method="post">
    <button type="submit">Logout</button>
  </form>
</body>
</html>
