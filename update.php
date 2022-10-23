<?php 
    $koneksi = mysqli_connect("localhost","root","","db_121");
    $id = $_POST['id_debora'];
    $nama = $_POST['nama_debora'];
    $alamat = $_POST['alamat_debora'];

    $query = "UPDATE tbl_debora SET nama_debora = '$nama', alamat_debora = '$alamat' WHERE id_debora = '$id'";
    mysqli_query($koneksi, $query);

    header("location: tampilan.php");
?>