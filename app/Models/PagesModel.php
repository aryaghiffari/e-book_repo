<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table = 'buku';

    public function getTotalBooks()
    {
        return $this->countAll(); // Mengembalikan jumlah total buku
    }
}
