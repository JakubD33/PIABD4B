<?php
$host = 'localhost';
$db   = 'kuba';
$user = 'root'; // domyślny użytkownik w XAMPP/WAMP
$pass = '';     // domyślnie puste hasło
try {
     $pdo = new PDO($dsn, $user, $pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
     die("Błąd połączenia z bazą: " . $e->getMessage());
}
?>
