<?php
require_once("db.php");

$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

$i = 1;
while ($data = mysqli_fetch_array($result)) {
    echo '
        <tr>
            <th>' . $i++ . '</th>
            <td>' . $data["nama"] . '</td>
            <td>' . $data["nim"] . '</td>
            <td>' . $data["prodi"] . '</td>
            <td>' . $data["asal"] . '</td>
            <td>' . $data["alamat"] . '</td>
            <td> 
                <a href="' . $data["id"] . '" class="btn btn-danger" onclick="hapus data : (' . $data["id"] . ')">Hapus</a>
            </td>
        </tr>';
}
