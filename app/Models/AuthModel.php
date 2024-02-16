<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users'; // Tentukan nama tabel
    protected $primaryKey = 'id'; // Jika primary key bukan 'id', sesuaikan
    protected $allowedFields = ['username', 'email', 'password', 'foto']; // Tentukan kolom-kolom yang diizinkan

    public function save_register($data)
    {
        $this->insert($data); // Gunakan method insert dari Model untuk memasukkan data ke tabel
    }
    public function login($username, $password)
    {
        $userData = $this->db->table('users')->where('username', $username)->get()->getRowArray();

        if ($userData && password_verify($password, $userData['password'])) {
            // Jika password sesuai, kembalikan data pengguna
            return $userData;
        } else {
            // Jika data tidak cocok atau password tidak sesuai, kembalikan null
            return null;
        }
    }
    public function getTotalUsers()
    {
        return $this->countAll(); // Mengembalikan jumlah total buku
    }
}
