<?php
include ("config.php");
//menangkap variabel yang di kirim oleh view.php untuk di update
$noinduk=$_POST['noinduk'];
$judul=$_POST['judul'];
$daerah=$_POST['daerah'];
$tahun=$_POST['tahun'];
 
//Disini query untuk mengupdate
$query= "update buku set file_name='$judul', daerah='$daerah', tahun='$tahun' where noinduk='$noinduk'";
$exe=mysqli_query($query,$conn);
 
//menampilkan laporan hasil update
//jika berhasil maka akan menamplikan update berhasil bos
//jika gagal maka akan menampilkan update gagal bos
if ($exe){
    echo "<script>alert('Update Berhasil Boss')
    location.replace('view.php')</script>";
}else{
    echo "<script>alert('Update Gagal Bos')
    location.replace('view.php')</script>";
}
?>