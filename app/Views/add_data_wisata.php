<?= $this->extend('admin/layout/template')?>
<?= $this->Section('content')?>


<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4"><br>
            <h1>Tambah Data Wisata</h1><br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?=base_url('produk')?>">Daftar Wisata</a></li>
                <li class="breadcrumb-item active">Tambah Data Wisata</li>
            </ol>
            <form action="<?=base_url('proses_add_wisata')?>" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Tempat Wisata</label>
                    <input type="text" class="form-control " id="namaWisata" name="namaWisata"
                        placeholder="Contoh : Jembatan Ampera">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                    <textarea type="text" class="form-control" cols="38" rows="8" id="deskripsi" name="deskripsi"
                        placeholder="Contoh : Tempat yang sangat bagus"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        placeholder="Contoh : Jl.SukaKamutapikamugak No 188">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar"
                        placeholder="Contoh : http://dev.adityaanugrah.com/api/ta/gambar/wisata/1.jpg">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fasilitas</label>
                    <input type="text" class="form-control" id="fasilitas" name="fasilitas"
                        placeholder="Contoh : WIFI Free">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori"
                        placeholder="Contoh : Kawasan Wisata">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Titik Koordinat</label>
                    <input type="text" class="form-control" id="koordinat" name="koordinat"
                        placeholder="Contoh : -2.9878742399851737, 104.76014935148945">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jam Buka</label>
                    <input type="text" class="form-control" id="jamBuka" name="jamBuka"
                        placeholder="Contoh : 09.00 WIB">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jam Tutup</label>
                    <input type="text" class="form-control" id="jamTutup" name="jamTutup"
                        placeholder="Contoh : 19.00 WIB">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection() ?>