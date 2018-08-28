<?php
include("config.php");

//menangkap variabel idbuku yang di kirim oleh view.php untuk di hapus
$noinduk=$_GET['noinduk'];
 
//query untuk menghapus data
$query="delete from perda where noinduk='$noinduk'";
$exe=mysqli_query($conn,$query);
 
//laporan untuk data yang dihapus
//berhasil atau tidak data dihapus
if ($exe){
    echo "<script>alert('Data Berhasil Dihapus')
    location.replace('download.php')</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus')
    location.replace('download.php')</script>";
}
?>