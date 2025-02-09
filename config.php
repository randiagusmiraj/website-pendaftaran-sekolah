<?php

// buat koneksi
$koneksi = mysqli_connect("localhost","root","","db_sekolah");

// cek koneksi
if (mysqli_connect_errno()) {
    echo "gagal koneksi ke database";
} else {
    echo "berhasil koneksi";
}
