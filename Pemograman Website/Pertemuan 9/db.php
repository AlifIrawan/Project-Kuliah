<?php

require_once("./koneksi.php");

$sql = "SELECT * FROM movie";

$result = $conn->query($sql);
