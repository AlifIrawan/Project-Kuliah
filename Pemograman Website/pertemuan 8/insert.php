<?php
include_once("koneksi.php");

session_start();


if (isset($_SESSION["username"])) {
    header("Location: home.php");
}


if (isset($_POST["title"]) && isset($_POST["language_id"])) {
    if (!empty($_FILES['gambar']['tmp_name'])) {
        $destination = "img/" . basename($_FILES['gambar']['name']);

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $destination)) {
            $query = "INSERT INTO film(title,language_id,img) VALUES(?,?,?)";
            $stmt = $conn->prepare($query);
            $stmt->execute([$_POST["title"], $_POST["language_id"], $destination]);
            header("Location: home.php");
        }
    }
} else {
    http_response_code(400);
}
