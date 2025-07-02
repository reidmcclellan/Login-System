<?php
$host   = 'DB_HOST';
$dbname = 'DB_NAME';
$user   = 'DB_USER';
$pass   = 'DB_PASS';

try 
{
  $pdo = new PDO
    (
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $user,
    $pass,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (PDOException $e) 
{
  die("DB connection failed: " . $e->getMessage());
}
