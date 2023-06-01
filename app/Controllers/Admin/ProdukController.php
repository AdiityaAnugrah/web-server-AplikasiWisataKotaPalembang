<?php

namespace App\Controllers\Admin;
use App\Models\WisataModel;
use App\Controllers\BaseController;

class ProdukController extends BaseController
{

    public function index(){
     

        $data = [
            'title' => 'Daftar Wisata',
            'daftar_wisata' => $this->WisataModel->orderBy('id','DESC')->findAll()
      ];
       return view('admin/produk/index',$data);
    }

    public function add_data_wisata(){
        $data = [
                    'title' => 'Tambah Data',
                    'validation' => \Config\Services::validation()
                ];
        return view('add_data_wisata',$data); //Menampilkan semua DATA
    }

    public function proses_add_wisata(){
        $wisata_model = new WisataModel();
        $wisata_model->insert($this->request->getPost());  //Menambahkan DATA ke DATABASE
        return redirect()->to(base_url('produk'));
    }

    public function edit_data_wisata($id = false){
        $wisata_model = new WisataModel();
        $data_wisata = $wisata_model->find($id); //Mencari DATA sesuai ID
        return view('edit_data_wisata',['data_wisata' => $data_wisata]);
    }

    public function proses_edit_wisata(){
        $wisata_model = new WisataModel();
        $wisata_model->update($this->request->getPost('id_wisata'),$this->request->getPost()); //Update Data 
        return redirect()->to(base_url('produk'));
    }

    public function delete_data_wisata($id = false){
        $wisata_model = new WisataModel();
        $wisata_model->delete($id);             // Hapus Data 
        return redirect()->to(base_url('produk'));
    }
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Daftar Wisata',
    //         'daftar_wisata' => $this->WisataModel->orderBy('id','DESC')->findAll()
    //     ];
    //     return view('admin/produk/index',$data);
    // }

    // public function kategori()
    // {
    //     $data = [
    //         'title' => 'Kategori Daftar Wisata',
    //         'daftar_kategori' => $this->WisataModel->orderBy('id','DESC')->findAll()
    //     ];
    //     return view('admin/produk/kategori',$data);
    // }

    // public function create(){
    //     $data = [
    //         'title' => 'Tambah Data',
    //         'validation' => \Config\Services::validation()
    //     ];
    //     return view('admin/produk/create', $data);
    // }


    // public function create_data(){
    //     $rules = $this->validate([
    //         'namawisata'        => 'required',
    //         'deskripsi'         => 'required',
    //         'alamat'            => 'required',
    //         'gambar'            => 'required',
    //         'fasilitas'         => 'required',
    //         'kategori'          => 'required',
    //         'koordinat'         => 'required',
    //         'jamBuka'           => 'required',
    //         'jamTutup'          => 'required',
    //     ]);

    //     // Jikda Validasi Gagal
    //     if(!$rules){
    //         session()->setFlashdata('failed','Data Gagal Ditambahkan');
    //         return redirect()->back()->withInput();
    //     }
        
    //     // Jika Validasi Berhasil
    //     $slug = url_title($this->request->getPost('namaWisata'),'-', TRUE);
    //     // $data = [
    //     //     'namaWisata'        => esc($this->request->getPost('namaWisata')),
    //     //     'deskripsi'         => esc($this->request->getPost('deskripsi')),
    //     //     'alamat'            => esc($this->request->getPost('alamat')),
    //     //     'gambar'            => esc($this->request->getPost('gambar')),
    //     //     'fasilitas'         => esc($this->request->getPost('fasilitas')),
    //     //     'kategori'          => esc($this->request->getPost('kategori')),
    //     //     'koordinat'         => esc($this->request->getPost('koordinat')),
    //     //     'jamBuka'           => esc($this->request->getPost('jamBuka')),
    //     //     'jamTutup'          => esc($this->request->getPost('jamTutup')),
    //     // ];

    //     // $this->WisataModel->insert($data);


    //     $this->WisataModel->insert([
    //         'namaWisata'        => esc($this->request->getPost('namaWisata')),
    //         'deskripsi'         => esc($this->request->getPost('deskripsi')),
    //         'alamat'            => esc($this->request->getPost('alamat')),
    //         'gambar'            => esc($this->request->getPost('gambar')),
    //         'fasilitas'         => esc($this->request->getPost('fasilitas')),
    //         'kategori'          => esc($this->request->getPost('kategori')),
    //         'koordinat'         => esc($this->request->getPost('koordinat')),
    //         'jamBuka'           => esc($this->request->getPost('jamBuka')),
    //         'jamTutup'          => esc($this->request->getPost('jamTutup')),
    //     ]);
    //     return redirect()->to(base_url('produk'))->with('success','Data Berhasil DiTambahkan');
    // }

    // public function update($id){
        
    // }

    
}