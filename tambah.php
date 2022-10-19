<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $posisi = $_POST['posisi'];
    $perusahaan = $_POST['perusahaan'];
    $alamat = $_POST['alamat'];

    $kirim = mysqli_query($db, "INSERT INTO crud (posisi,perusahaan,alamat) VALUES ('$posisi','$perusahaan','$alamat')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:utamacrud.php");
    }else {
        echo "gagal mengirim";
    }
    
}