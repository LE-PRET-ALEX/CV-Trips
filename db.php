<?php


$host = "localhost";
$user = "alexandre";
$password = "Xela123*$*";
$database = "cv_trips_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Opcional: definir charset UTF-8
$conn->set_charset("utf8");

?>
