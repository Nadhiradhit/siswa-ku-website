<?php

include("connect.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama_siswa'];
    $usia = $_POST['umur_siswa'];
    $alamat = $_POST['alamat_siswa'];
    $jk = $_POST['jk_siswa'];
    $agama = $_POST['agama_siswa'];
    $sekolah = $_POST['sekolah_asal'];


    // buat query update
    $sql = "UPDATE siswa SET nik='$nik', nama_siswa='$nama', umur_siswa='$usia', alamat_siswa='$alamat', jk_siswa='$jk', agama_siswa='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../public/index-admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>