<?php
include("koneksi.php");
$id=$_GET['id_user'];

$sql="DELETE FROM tb_bahan WHERE id_bahan='$id'";
$query=mysqli_query($koneksi, $sql);

$sql="DELETE FROM tb_user WHERE id_user='$id'";
$query=mysqli_query($koneksi, $sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>

