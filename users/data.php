<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM users";
        $d = mysqli_query($koneksi, $query);

        // Periksa apakah query berhasil dieksekusi
        if ($d) {
            // Loop untuk mengambil setiap baris data
            while ($data = mysqli_fetch_assoc($d)) {
        ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['no_telp'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                </tr>
        <?php
            }
        } else {
            // Tindakan yang diambil jika query tidak berhasil dieksekusi
            echo "Tidak ada data yang ditemukan.";
        }
        ?>

    </tbody>
</table>