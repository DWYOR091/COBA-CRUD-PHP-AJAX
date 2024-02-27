<div class="table-responsive">
    <table class="table table-striped table-hover table-borderless">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM users";
            $d = mysqli_query($koneksi, $query);

            if ($d) {
                while ($data = mysqli_fetch_assoc($d)) {
            ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['no_telp'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td scope="row">
                            <a href="#" class="btn btn-warning">Edit</a>
                            <button id="<?= $data['id'] ?>" class="hapus" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "Tidak ada data yang ditemukan.";
            }
            ?>

        </tbody>
    </table>
</div>