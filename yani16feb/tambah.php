<html>
    <head>
        <body>
            <h3>FORM TAMBAH DATA</h3>
            <form action="proses-tambah.php" method="POST">
                <form>
                    <p>
                        <label for="nama_user">Nama User: </label>
                        <input type="text" name="nama_user"/>
                    </p>
                    <p>
                        <label for="jabatan">Jabatan: </label>
                        <input type="text" name="jabatan"/>
                    </p>
                    <p>
                        <label for="nama_bahan">Nama Bahan: </label>
                        <input type="text" name="nama_bahan" />
                    </p>
                    <p>
                        <label for="jenis_bahan">Jenis Bahan: </label>
                        <input type="text" name="jenis_bahan" />
                    </p>
                    <p>
                        <label for="stok">Stok: </label>
                        <input type="number" name="stok" />
                    </p>
                    <p>
                        <label for="harga">Harga: </label>
                        <input type="number" name="harga" />
                    </p>
                    <p>
                        <label for="kondisi">Kondisi: </label>
                        <label><input type="radio" name="kondisi" Value="baik" />Baik </label>
                        <label><input type="radio" name="kondisi" Value="rusak" />Rusak </label>
                    </p>
                    <p>
                        <label for="tanggal_masuk">Tanggal Masuk: </label>
                        <input type="date" name="tanggal_masuk" />
                    </p>
                    <p>
                        <input type="submit" value="tambah" name="tambah" />
                    </p>
                </form>
        </body>
    </head>
</html>