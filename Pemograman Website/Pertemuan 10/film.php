<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'sakila';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    http_response_code(500);
    die("Connection failed: {$db->connect_error}");
}

// LEFT JOIN language ON language.language_id = film.language_id 
$begin = isset($_GET['begin']) ? $_GET['begin'] : 0;
$query = "SELECT * FROM film LIMIT {$begin}, 9";
$sql = $db->query($query);
$data = [];

while ($row = $sql->fetch_assoc()) {
    $row['thumbnail'] = file_exists("assets/{$row['film_id']}.jpg") ? "assets/{$row['film_id']}.jpg" : "assets/no_image_avaible.jpg";
    array_push($data, $row);
}
header("Content-Type: application/json");
echo json_encode($data);
