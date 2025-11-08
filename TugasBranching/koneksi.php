<?php
$conn = mysqli_connect('localhost','root','','db_tugas');
    die('Koneksi gagal: '.mysqli_connect_error());
}
echo 'Koneksi berhasil!';
?>
