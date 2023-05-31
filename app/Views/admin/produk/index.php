<?= $this->extend('admin/layout/template')?>
<?= $this->Section('content')?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Daftar Wisata</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Daftar Wisata</li>
            </ol>
            <div class="container-fluid">
                <div class=" mb-3">
                    <a href="<?= base_url('add_data_wisata') ?>" class="btn btn-primary"> Tambah Data tempat Wisata </a>

                </div>
                <table class="table table-bordered border-primary">
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
                        <?php foreach($daftar_wisata as $wisata) :?>
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

        </div>
    </main>
    <!-- Modal Tambah Data-->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg bg-primary text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fas fa-plus"></i>Tambah Data Wisata
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <?=csrf_field()?>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>