<?= $this->extend('admin/layout/template')?>
<?= $this->Section('content')?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4"><br>
            <h1>Edit Data Wisata</h1><br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('produk')?>">Daftar Wisata</a></li>
                <li class="breadcrumb-item active">Tambah Data Wisata</li>
            </ol>
            <form action="<?=base_url('proses_edit_wisata')?>" method="POST">

                <input type="hidden" class="form-control" id="id_wisata" name="id_wisata"
                    value="<?= $data_wisata->id ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Tempat Wisata</label>
                    <input type="text" class="form-control" id="namaWisata" name="namaWisata"
                        value="<?= $data_wisata->namaWisata ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" cols="38" rows="8" id="deskripsi" name="deskripsi"
                        value="<?= $data_wisata->deskripsi ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        value="<?= $data_wisata->alamat ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar"
                        value="<?= $data_wisata->gambar ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fasilitas</label>
                    <input type="text" class="form-control" id="fasilitas" name="fasilitas"
                        value="<?= $data_wisata->fasilitas ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori"
                        value="<?= $data_wisata->kategori ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Titik Koordinat</label>
                    <input type="text" class="form-control" id="koordinat" name="koordinat"
                        value="<?= $data_wisata->koordinat ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jam Buka</label>
                    <input type="text" class="form-control" id="jamBuka" name="jamBuka"
                        value="<?= $data_wisata->jamBuka ?>">
                </div>
                <div class=" mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jam Tutup</label>
                    <input type="text" class="form-control" id="jamTutup" name="jamTutup"
                        value="<?= $data_wisata->jamTutup ?>">
                </div>
                <div class=" mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection() ?>