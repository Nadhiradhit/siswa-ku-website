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
        <section class="bg-slate-100">
            <div class="navbar left-0 right-0 mx-auto w-[95%]">
                <div class="navbar-start">
                    <a href="index-admin.php" class=" font-Poppins font-semibold text-2xl">Siswa Ku 🧑‍🎓</a>
                </div>
                <div class="navbar-end gap-5 font-Poppins font-normal">
                    <ul class="flex gap-5 ">
                        <li>
                            <a href="index-input-data.php" class="hover:text-slate-600 ">Tambah Data</a>
                        </li>
                        <li>
                            <a href="../config/logout-admin.php" class="hover:text-slate-600">Log Out</a>
                        </li>
                    </ul>
                    <label class="swap swap-rotate">
                       <input type="checkbox" class="hidden"/>
                        <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
                        <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
                    </label>
                </div>
            </div>
       </section>

        <section class="bg-slate-200">
            <div class="mx-auto w-[75%]">
                <h4 class="py-3 font-Poppins font-semibold text-center text-md-1">Tambah Data Siswa</h4>
                <form action="../config/insert-data.php" method="post">
                    <div class="sm:col-span-2 py-3">
                        <label for="nik_siswa" class="block text-sm font-semibold leading-6 text-gray-900">NIK Siswa</label>
                        <div class="mt-2.5">
                            <input type="number" name="nik" id="nik" autocomplete="organization" 
                            class="block w-[50%]  rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2 py-3">
                        <label for="nama_siswa" class="block text-sm font-semibold leading-6 text-gray-900">Nama Siswa</label>
                        <div class="mt-2.5">
                            <input type="text" name="nama_siswa" id="nama_siswa" autocomplete="organization" 
                            class="block w-[50%]  rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2 py-3">
                        <label for="umur_siswa" class="block text-sm font-semibold leading-6 text-gray-900">Umur Siswa</label>
                        <div class="mt-2.5">
                            <input type="number" name="umur_siswa" id="umur_siswa" autocomplete="organization" 
                            class="block w-[50%] rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2 py-3">
                        <label for="alamat_rumah" class="block text-sm font-semibold leading-6 text-gray-900">Alamat Rumah</label>
                        <div class="mt-2.5">
                            <textarea name="alamat_siswa" id="alamat_siswa" rows="4" class="block w-[50%] rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2 py-3 w-36">
                        <label for="jenis_kelamin" class="block text-sm font-semibold leading-6 text-gray-900">Jenis Kelamin</label>
                        <div class="form-control">
                            <label class="label cursor-pointer">
                                <span class="label-text">Laki-Laki</span> 
                                <input type="radio" name="jk_siswa" value="Laki-Laki" class="radio checked:bg-blue-500" />
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="label cursor-pointer">
                                <span class="label-text">Perempuan</span> 
                                <input type="radio" name="jk_siswa" value="Perempuan" class="radio checked:bg-red-500" />
                            </label>
                        </div>
                    </div>
                    <div class="sm:col-span-2 py-3">
                        <label for="agama_siswa">Agama</label>
                        <div class="form-control mt-2">
                            <select class="select select-bordered w-[50%] max-w-xs" name="agama_siswa">
                                <option disabled selected>Pilih Agama..</option>
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Budha</option>
                                <option>Hindu</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2 py-3">
                        <label for="nama_siswa" class="block text-sm font-semibold leading-6 text-gray-900">Sekolah Asal</label>
                        <div class="mt-2.5">
                            <input type="text" name="sekolah_asal" id="sekolah_asal" autocomplete="organization" 
                            class="block w-[50%]  rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="py-4">
                        <button type="submit" class="btn btn-outline btn-danger w-64" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>