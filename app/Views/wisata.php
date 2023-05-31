<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Kota Palembang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('wisata')?>">
                <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Data Wisata Kota Palembang
            </a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?= base_url('add_data_wisata') ?>" class="btn btn-primary"> Tambah Data tempat Wisata </a>
                <a href="<?= base_url('logout') ?>" type="button" class="btn btn-danger"> Keluar </a>
            </div>
            <table class="table table-responsive">
                <thead class=" table-dark">
                    <tr>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Koordinat</th>
                        <th scope="col">Jam Buka</th>
                        <th scope="col">Jam Tutup</th>
                        <th scope="col">Aksi</th>
                </thead>
                <tbody class="sticky-sm-col">
                    <?php foreach($all_data_wisata as $wisata) :?>
                    <tr>
                        <td>
                            <?= $wisata->namaWisata?>
                        </td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <?= $wisata->deskripsi?>
                            </div>
                        </td>
                        <td>
                            <?= $wisata->alamat?>
                        </td>
                        <td>
                            <?= $wisata->gambar?>
                        </td>
                        <td>
                            <?= $wisata->fasilitas?>
                        </td>
                        <td>
                            <?= $wisata->kategori?>
                        </td>
                        <td>
                            <?= $wisata->koordinat?>
                        </td>
                        <td>
                            <?= $wisata->jamBuka?>
                        </td>
                        <td>
                            <?= $wisata->jamTutup?>
                        </td>

                        <td>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="<?= base_url('edit_data_wisata').'/'.$wisata->id ?>" type="button"
                                    class="btn btn-warning me-md-2">Edit</a><br><br>
                                <a href="<?= base_url('delete_data_wisata').'/'.$wisata->id ?>" type="button"
                                    class="btn btn-danger" class="btn btn-info btn-sm">Delete</a>
                            </div>
                        </td>




                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </nav>


    <!-- <div class="container-fluid"><br>
        <table class="table table-responsive">
            <thead class=" table-dark">
                <tr>
                    <th scope="col">Nama Wisata</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Koordinat</th>
                    <th scope="col">Jam Buka</th>
                    <th scope="col">Jam Tutup</th>
                    <th scope="col">Aksi</th>
            </thead>
            <tbody class="sticky-sm-col">
                <?php foreach($all_data_wisata as $wisata) :?>
                <tr>
                    <td>
                        <?= $wisata->namaWisata?>
                    </td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <?= $wisata->deskripsi?>
                        </div>
                    </td>
                    <td>
                        <?= $wisata->alamat?>
                    </td>
                    <td>
                        <?= $wisata->gambar?>
                    </td>
                    <td>
                        <?= $wisata->fasilitas?>
                    </td>
                    <td>
                        <?= $wisata->kategori?>
                    </td>
                    <td>
                        <?= $wisata->koordinat?>
                    </td>
                    <td>
                        <?= $wisata->jamBuka?>
                    </td>
                    <td>
                        <?= $wisata->jamTutup?>
                    </td>

                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('edit_data_wisata').'/'.$wisata->id ?>" type="button"
                                class="btn btn-warning me-md-2">Edit</a><br><br>
                            <a href="<?= base_url('delete_data_wisata').'/'.$wisata->id ?>" type="button"
                                class="btn btn-danger" class="btn btn-info btn-sm">Delete</a>
                        </div>
                    </td>




                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <br>

    </div> -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>