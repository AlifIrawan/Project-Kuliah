<?php

require_once('./koneksi.php');

$id = $_GET['id'];

if (hapusData($id) > 0) {
	echo
	"
		<script>
			alert('Film berhasil dihapus');
			document.location.href = './home.php';
		</script>
		
		";
} else {
	echo
	"
		<script>
			alert('Data Film gagal dihapus');
			document.location.href = './home.php';
		</script>
		
		";
}
