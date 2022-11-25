<?php

require_once('./sistem.php');

// Ngambil id dari url yang dikirm pake get
$id = $_GET['id'];

// dicek di database pake function hapusData sesuai id kalo ada bakal 1 kalo ga ada bakal 0
if (hapusData($id) > 0) {
	echo
	"
		<script>
			alert('Buku berhasil dihapus');
			document.location.href = './index.php';
		</script>
		
		";
} else {
	echo
	"
		<script>
			alert('Data Buku gagal dihapus');
			document.location.href = './index.php';
		</script>
		
		";
}
