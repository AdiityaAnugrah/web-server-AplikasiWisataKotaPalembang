<?php

namespace App\Controllers;
use App\Models\WisataModel;

class Wisata extends BaseController
{
    public function index(){
        $data = [
            'title' => 'Daftar Wisata',
        ];
        $wisata_model = new WisataModel();
        $all_data_wisata = $wisata_model->findAll(); //Mengambil semua data dari DB menggunakan fungsi findAll
        return view('wisata' , ['all_data_wisata' => $all_data_wisata],$data); //Lalu di tampilkan DI fondEnd 
    }

    public function add_data_wisata(){
        return view('add_data_wisata'); //Menampilkan semua DATA
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
}