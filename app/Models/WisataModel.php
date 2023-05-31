<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table            = 'wisata';
    protected $primarykey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id','namaWisata','deskripsi','alamat','gambar','fasilitas','kategori','koordinat','jamBuka','jamTutup'];


    // Dates
    protected $useTimestamps    = true;
    protected $dateFormat       = 'datetime';
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}