<?php

require_once("./db.php");


$ngetik = $_GET["ngetik"];

$sql = "SELECT * FROM tbl_mhs WHERE 
        nama LIKE '%{$ngetik}%' OR
        nim LIKE '%{$ngetik}%' OR
        no_hp LIKE '%{$ngetik}%'
        ";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
        <th scope='row'>{$row['no']}</th>
        <td>{$row['nama']}</td>
        <td>{$row['nim']}</td>
        <td>{$row['no_hp']}</td>
    </tr>
    ";
}
