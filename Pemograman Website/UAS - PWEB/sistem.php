<?php

// SEMUA HAL PENTING CRUD ADA DISINI KALO GA ADA INI CRUD GA JALAN

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_perpustakaan");


// Query database terus dimasukin ke array biar rapi
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


// Tambah Data
function tambahData($post)
{
    global $conn;
    $judul = $post['judul'];
    $penerbit = $post['penerbit'];
    $genre = $post['genre'];
    $harga = $post['harga'];

    $tambah = "INSERT INTO buku VALUES('', '$judul','$penerbit','$genre',$harga)";

    mysqli_query($conn, $tambah);

    return mysqli_affected_rows($conn);
}


// Hapus Data
function hapusData($id)
{
    global $conn;

    $hapus = "DELETE FROM buku WHERE id_buku=$id";

    mysqli_query($conn, $hapus);

    return mysqli_affected_rows($conn);
}


// Update Data
function updateData($post)
{
    global $conn;
    $id = $post['id'];
    $judul = $post['judul'];
    $penerbit = $post['penerbit'];
    $genre = $post['genre'];
    $harga = $post['harga'];

    $update = "UPDATE buku SET
                id_buku = $id,
                judul_buku = '$judul',
                penerbit_buku = '$penerbit',
                genre_buku = '$genre',
                harga_buku = '$harga'
                WHERE
                id_buku = $id
                ";

    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}
