<?php

$NIM  = 202410103017;
$NAMA = 'Fasal Alif Haikal Irawan';

$judul = 'Di Daerah Jawa Timur Ini, Nikah Sedarah Masih Jadi Tradisi'; //Variable untuk menyimpan judul berita
$deskripsi = 'Fenomena itu diungkapkan Menteri Koordinator 
                bidang Pembangunan Manusia dan Kebudayaan (Menko PMK) 
                Muhadjir Effendy dalam kunjungan kerjanya ke sana, 
                Senin (4/4) Dia mencontohkan dahulu kerap terjadi nikah sedarah 
                di Desa Krebet dan Desa Sidoharjo, Kecamatan Jambon, Ponorogo. 
                Walhasil, tidak jarang pasangan nikah sedarah itu melahirkan 
                keturunan pengidap disabilitas dan stunting. 
                Kedua desa itu bahkan dikenal sebagai kampung difabel. 
                Namun, katanya, saat ini, sudah ada kesadaran dari warga untuk 
                menghindari hal tersebut dengan mencari jodoh di luar desa. 
                “Saya kira itu salah satu solusi tidak terjadi kawin inses untuk 
                tidak terjadinya turunan gen yang negatif, katanya.'; // Variable untuk menyimpan deskripsi berita
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Percobaan Index Page</title>
</head>
<div class="text-center m-5">
    <h1><?= $NAMA; ?></h1>
    <h2><?= $NIM; ?></h2>
</div>


<body>
    <?php for ($nomor = 1; $nomor <= 10; $nomor++) : //Perulangan untuk menampilkan judul dan deskripsi dari 1 sampai 10 kali 
    ?>
        <h1><?php echo $judul . $nomor; //Menampilkan judul berita dan nomor dari berita 
            ?></h1>
        <p><?= $deskripsi; //Menampilkan deskripsi dari berita diatas 
            ?></p>
    <?php endfor //sebagai pembatas dari perulangan 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>