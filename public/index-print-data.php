<?php

include '../config/connect.php';

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tambah Data</title>
</head>
<body>
    <!-- Cek Status Login -->
    <?php
    
    session_start();
    if($_SESSION['status']!="login"){
        header("location:index.php?belum=login");
    }

    ?>
    <div class="bg-white">
            <!-- Input Form -->
            <section class="bg-slate-200">
                <div class="mx-auto w-[75%]">
                    <div class="overflow-x-auto">
                        <table class="table table-lg">
                            <thead class=" font-Poppins text-primary">
                                <tr>
                                    <th></th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Sekolah Asal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                $see = "SELECT * FROM siswa";
                                $query = mysqli_query($db, $see);
                                
                                while($siswa = mysqli_fetch_array($query)){
                                    echo "<tr class=bg-base-200>";

                                    echo "<td>".$no++."</td>";
                                    echo "<td>".$siswa['nik']."</td>";
                                    echo "<td>".$siswa['nama_siswa']."</td>";
                                    echo "<td>".$siswa['umur_siswa']." Tahun"."</td>";
                                    echo "<td>".$siswa['alamat_siswa']."</td>";
                                    echo "<td>".$siswa['jk_siswa']."</td>";
                                    echo "<td>".$siswa['agama_siswa']."</td>";
                                    echo "<td>".$siswa['sekolah_asal']."</td>";
                                    echo "<td>";
                                    echo "</tr>";
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
    </div>

        <script>
            window.print()
        </script>
</body>
</html>