<?php
$koneksi = mysqli_connect("localhost","root","","db_121");
$id=$_GET['id'];

$sql="DELETE from tbl_debora where id_debora=$id";
$hasil=mysqli_query($koneksi,$sql);

if(!$hasil){
    echo "<script>alert('Data GAGAL di delete');location.href='tampilan.php'</script>";
}else{
    echo "<script>alert('Data BERHASIL di delete');location.href='tampilan.php'</script>";
}
?>