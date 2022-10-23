<?php
$koneksi = mysqli_connect("localhost","root","","db_121");

$nama_debora=$_POST['nama_debora'];
$alamat_debora=$_POST['alamat_debora'];

$sql="insert into tbl_debora value(null, '$nama_debora','$alamat_debora')";
$hasil=mysqli_query($koneksi,$sql);

if($hasil){
    echo "<script>alert('Data berhasil disimpan');location.href='tampilan.php'</script>";
}else{
    echo "<script>alert('Data gagal disimpan');location.href='tambah.php'</script>";
}
?>