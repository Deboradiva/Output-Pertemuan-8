<?php
$koneksi = mysqli_connect("localhost","root","","db_121");

$sql = "select * from tbl_debora";
$hasil = mysqli_query($koneksi,$sql);
?>
<h2>Nama : Debora Divaningrum</h2>
<h2>NIM : 210411100121</h2>
<h2>Kelas : PAW C</h2>
<a href="tambah.php">Tambah</a>
<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
<?php
    while ($row=mysqli_fetch_array($hasil)){
?>
    <tr>
        <td><?php echo $row['id_debora']?></td>
        <td><?php echo $row['nama_debora']?></td>
        <td><?php echo $row['alamat_debora']?></td>
        <td>
            <a href="form_edit.php?id=<?=$row['id_debora']?>" onclick ="return confirm('Apakah Anda ingin MENGEDIT Data?')">Edit</a>
            <a href="delete.php?id=<?=$row['id_debora']?>" 
            onclick="return confirm('apakah anda sungguh benar ingin menghapus <?php echo $row['nama_debora']?>')" >Delete</a>
        </td>
    </tr>
<?php } ?>
</table>