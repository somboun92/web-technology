<?php

$host = getenv('DB_HOST') ?: 'localhost';
$dbname = getenv('DB_NAME') ?: 'testdb';
$port = getenv('DB_PORT') ?: 3306;
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: 'root';

echo "🔧 Debug info:<br>";
echo "Host: $host<br>";
echo "DB: $dbname<br>";
echo "Port: $port<br>";
echo "User: $user<br>";

try {
  $PDO = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $password);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "✅ Connection established!<br>";
} catch (PDOException $e) {
  echo "❌ Connection failed: " . $e->getMessage();
}
?>
