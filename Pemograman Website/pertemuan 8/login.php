<?php
include_once("koneksi.php");

session_start();


if (isset($_SESSION["username"])) {
    header("Location: home.php");
}


if (isset($_POST["email"]) && isset($_POST["password"])) {
    $query = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$_POST["email"], $_POST["password"]]);
    $result = $stmt->fetch();
    if ($result) {
        $_SESSION['username'] = $result['username'];
        echo 'ok';
    } else {
        http_response_code(400);
    }
} else {
    http_response_code(400);
}
