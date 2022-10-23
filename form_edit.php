<?php 
    $Koneksi =  mysqli_connect('localhost', 'root', '', 'db_121');
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_debora WHERE id_debora = $id";
    $hasil = mysqli_query($Koneksi, $query);
    if (!$hasil) {
        echo "Gagal";
    }
    $baris = mysqli_fetch_array($hasil);
?>

<h3>Form Tambah Data</h3>

<form action="update.php" method="post">
<input type="hidden" name="id_debora" value="<?php echo $baris['id_debora']?>">
<table>
    <tr>
        <td>Nama Mahasiswa</td>
        <td>:</td>
        <td>
            <input type="text" id="nama_debora" name="nama_debora" value="<?php echo $baris['nama_debora']?>">
        </td>
    </tr>
    <tr>
        <td>Alamat Mahasiswa</td>
        <td>:</td>
        <td>
            <input type="text" id="alamat_debora" name="alamat_debora" value="<?php echo $baris['alamat_debora']?>">
        </td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Kirim"></td>
    </tr>
</table>
</form>