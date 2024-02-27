<!doctype html>
<html lang="en">

<head>
    <title>CRUD Ajax</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div class="container">
            <h2 class="pb-2">Data User Pakai Ajax</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
            <div class="mt-2 row">
                <div class="col-7">
                    <div id="tampil_data">

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="form_input">
                        <div class="modal-body">
                            ID
                            <input type="text" name="id" id="id" placeholder="Masukan ID" class="form-control">
                            Nama
                            <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control">
                            No Telp
                            <input type="text" name="notelp" id="notelp" placeholder="Masukan No Telp" class="form-control">
                            Alamat
                            <textarea name="alamat" id="alamat" cols="20" rows="3" placeholder="Masukan Alamat" class="form-control"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Reset</button>
                            <button type="button" id="simpan" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            tampilData();
        });

        //fungsi tampil data
        function tampilData() {
            // $.ajax({
            //     url: 'data.php',
            //     type: 'get',
            //     success: function(data) {
            //         $('#tampil_data').html(data);
            //     }
            // });
            $.get('data.php', function(data, status) {
                $('#tampil_data').html(data);
            })
        }

        $(document).ready(function() {
            // Menangani event klik tombol simpan
            $("#simpan").click(function() {
                // Mengirim data formulir menggunakan AJAX
                $.ajax({
                    url: 'simpan.php',
                    type: 'post',
                    data: $('#form_input').serialize(),
                    success: function(response) {
                        tampilData();
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                //kosongkan form id dan jurusan
                $("#id").val("");
                $("#nama").val("");
                $("#notelp").val("");
                $("#alamat").val("");

            });
        });
    </script>

</body>

</html>