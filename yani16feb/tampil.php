<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<h1>Lihat Data</h1>
<a href="tambah.php"><input type="button" value = "Tambah"></a>
<body>
    <table border="1">
        <tr>
          <th>NO</th>
          <th>Nama User</th>
          <th>Jabatan</th>
          <th>Nama Bahan</th>
          <th>Jenis Bahan</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Kondisi</th>
          <th>Tanggal Masuk</th>
          <th>Aksi</th>
        </tr>
        <?php
        include("koneksi.php");
        $sql="SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan=tb_bahan.id_bahan";
        $query=mysqli_query($koneksi,$sql);

        while($ok=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$ok['id_user']."</td>";
            echo "<td>".$ok['nama_user']."</td>";
            echo "<td>".$ok['jabatan']."</td>";
            echo "<td>".$ok['nama_bahan']."</td>";
            echo "<td>".$ok['jenis_bahan']."</td>";
            echo "<td>".$ok['stok']."</td>";
            echo "<td>".$ok['harga']."</td>";
            echo "<td>".$ok['kondisi']."</td>";
            echo "<td>".$ok['tanggal_masuk']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id_user=".$ok['id_user']."'>Edit</a> |";
            echo "<a href='hapus.php?id_user=".$ok['id_user']."'>Hapus</a> |";
            echo "</td>";
            echo "</tr>";
        }
        ?>
</table>
</body>
</html>