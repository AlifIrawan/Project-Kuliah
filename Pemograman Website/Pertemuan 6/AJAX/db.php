<?php

$conn = new mysqli('localhost', '202410103017', 'secret', 'uas202410103017');
if ($conn->connect_error) {
    die('Koneksi gagal');
}
