<?php
session_start(); 
// cek jika belom login, pindah ke halaman login
if(!isset($_SESSION['is_login'])) {
  header("Location: login.php");
}

require_once __DIR__."/koneksi.php";

$id	= $_GET['id'];

$query = mysqli_query($koneksi, "delete from buku where kd_buku='$id'");
if ($query) {
    echo "<script>alert('data berhasil dihapus');
    document.location.href='buku.php'</script>\n";
} else {
    echo "<script>alert('data gagal dihapus');
    document.location.href='buku.php'</script>\n";
}
?>