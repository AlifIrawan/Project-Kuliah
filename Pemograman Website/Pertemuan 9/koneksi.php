<?php

$conn = new mysqli('localhost', '202410103017', 'secret', 'uas202410103017');
if ($conn->connect_error) {
    die("Gagal Koneksi");
}


function tampilData($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function upload()
{
    $imageName = $_FILES['image']['name'];
    $imageErr = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    if ($imageErr == 4) {
        return false;
    }

    move_uploaded_file($tmpName, 'img/' . $imageName);
    return $imageName;
}


// Tambah Data
function tambahData($post)
{
    global $conn;

    $nama = $post['nama'];
    $rating = $post['rating'];
    $image = upload();

    if (!$image) {
        return false;
    }

    $tambah = "INSERT INTO movie VALUES('', '$nama','$rating', '$image')";

    mysqli_query($conn, $tambah);

    return mysqli_affected_rows($conn);
}


// Hapus Data
function hapusData($id)
{
    global $conn;

    $hapus = "DELETE FROM movie WHERE id=$id";

    mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}


// Update Data
function updateData($post)
{
    global $conn;
    $id = $post['id'];
    $nama = $post['nama'];
    $rating = $post['rating'];
    $gambarlama = $post['gambarlama'];

    if ($_FILES['image']['error'] == 4) {
        $image = $gambarlama;
    } else {
        $image = upload();
    }

    $update = "UPDATE movie SET
                id = $id,
                nama_film = '$nama',
                rating_film = '$rating',
                img = '$image'
                WHERE
                id = $id
                ";



    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}
