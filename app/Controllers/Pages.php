<?php

namespace App\Controllers;

use App\Models\PagesModel;
use App\Models\AuthModel;

class Pages extends BaseController
{
    protected $pagesmodel;
    protected $authmodel;

    public function __construct()
    {
        // Load the BookModel in the constructor
        $this->pagesmodel = new PagesModel();
        $this->authmodel = new AuthModel();
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        // Ambil jumlah total buku dari model
        $totalBooks = $this->pagesmodel->getTotalBooks();
        $totalUsers = $this->authmodel->getTotalUsers();

        return view('pages/dashboard', ['totalBooks' => $totalBooks, 'totalUsers' => $totalUsers], $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('pages/about', $data);
    }
    public function kontak()
    {
        $data = [
            'title' => 'Kontak Kami',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl. Jenddral Sudirman, no.69',
                    'kota' => 'Riau'
                ],
                [
                    'tipe' => 'Kampus',
                    'alamat' => 'jl. fatahillah',
                    'kota' => 'cirebon'
                ]
            ]
        ];
        return view('pages/kontak', $data);
    }
    public function index()
    {
        $data = [
            'title' => 'Selamat Datang'
        ];

        return view('pages/home', $data);
    }
}
