<?php

include("connect.php");


if(isset($_POST['submit'])){

   
    $nik = $_POST['nik'];
    $nama = $_POST['nama_siswa'];
    $usia = $_POST['umur_siswa'];
    $alamat = $_POST['alamat_siswa'];
    $jk = $_POST['jk_siswa'];
    $agama = $_POST['agama_siswa'];
    $sekolah = $_POST['sekolah_asal'];

   
    $sql = "INSERT INTO siswa (nik,nama_siswa,umur_siswa,alamat_siswa,jk_siswa,agama_siswa,sekolah_asal) 
            VALUE ('$nik','$nama', '$usia','$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

 
    if( $query ) {
        
        $_SESSION['status'] = "Data Inserted Successfully";
        header('Location: ../public/index-input-data.php?status=sukses');
    } else {

        header('Location: ../public/index-input-data.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}


?>