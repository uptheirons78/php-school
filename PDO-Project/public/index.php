<?php 
try {
  $pdo = new PDO('mysql:host=localhost;dbname=ijdb', 
  'ijdbuser', 'mypassword');
$output = 'Database connection established.';
}
catch (PDOException $e) {
  $output = 'Unable to connect to db server';
}

include __DIR__ . '/../templates/output.html.php';
?>