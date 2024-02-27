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
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editmodal<?= $data['id'] ?>">
                                Edit </button>
                            <button id="<?= $data['id'] ?>" class="btn btn-danger hapus">Hapus</button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="editmodal<?= $data['id'] ?>" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editmodalLabel">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="form_edit" action="update.php" method="POST">
                                    <div class="modal-body">
                                        ID
                                        <input type="text" name="idEdit" id="idEdit" placeholder="Masukan ID" class="form-control" value="<?= $data['id'] ?>">
                                        Nama
                                        <input type="text" name="namaEdit" id="namaEdit" placeholder="Masukan Nama" class="form-control" value="<?= $data['nama'] ?>">
                                        No Telp
                                        <input type="text" name="notelpEdit" id="notelpEdit" placeholder="Masukan No Telp" class="form-control" value="<?= $data['no_telp'] ?>">
                                        Alamat
                                        <textarea name="alamatEdit" id="alamatEdit" cols="20" rows="3" placeholder="Masukan Alamat" class="form-control"><?= $data['alamat'] ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                        <button type="submit" id="simpanEdit" class="btn btn-secondary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>
</div>
</div>
</div>