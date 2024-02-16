<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Validation\StrictRules\Rules;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }
    public function index()
    {
        // $buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->getBuku()
        ];
        return view('buku/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul buku ' . $slug . ' tidak ditemukan');
        }
        return view('buku/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form tambah buku',

        ];
        return view('buku/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[buku.judul]',
                'errors' => [
                    'required' => '{field} buku harus diisi !',
                    'is_unique' => '{field} buku sudah ada !'
                ],
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to(base_url() . 'buku/create')->withInput()->with('validation', $validation);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        //ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        //apakah ada gambar?
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default-sampul.png';
        } else {
            $namaSampul = $slug . '-sampul.png';
            $fileSampul->move('sampul_buku', $namaSampul);
        }
        // Ambil file PDF yang diunggah
        $file = $this->request->getFile('file');
        // Generate nama unik untuk file PDF
        $pdfName = $slug . '-file.pdf';
        // Pindahkan file PDF ke folder yang ditentukan
        $file->move(FCPATH . 'file_buku/', $pdfName);

        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul,
            'file' => $pdfName
        ]);
        session()->setFlashdata('pesan', 'Buku berhasil ditambahkan');
        return redirect()->to(base_url() . 'buku');
    }

    public function delete($id)
    {
        $buku = $this->bukuModel->find($id);
        if ($buku['sampul'] != 'default-sampul.png') {
            unlink(FCPATH . 'sampul_buku/' . $buku['sampul']);
        }

        // Hapus file PDF
        $pdfPath = FCPATH . 'file_buku/' . $buku['file'];
        if (file_exists($pdfPath)) {
            unlink($pdfPath);
        }

        $this->bukuModel->delete($id);
        // session()->setFlashdata('pesan', 'Buku berhasil dihapus');
        // Menambahkan penundaan 2 detik sebelum redirect
        usleep(2000000); // 2 detik dalam mikrodetik
        return redirect()->to(base_url() . 'buku');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form ubah buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        //cek kondisi
        $bukuLama = $this->bukuModel->getBuku($this->request->getVar('slug'));
        if ($bukuLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[buku.judul]';
        }
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} buku harus diisi !',
                    'is_unique' => '{field} buku sudah ada !'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to(base_url() . 'buku/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $fileSampul = $this->request->getFile('sampul');

        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $slug . '-sampul.png';
            $fileSampul->move('sampul_buku', $namaSampul);
            unlink(FCPATH . 'sampul_buku/' . $this->request->getVar('sampulLama'));
        }
        // Ambil file PDF yang diunggah
        // $file = $this->request->getFile('file');
        // if ($file->getError() == 4) {
        //     $pdfname = $this->request->getVar('sampulLama');
        // } else {
        //     $pdfname = $slug . '-file.pdf';
        //     $fileSampul->move('file_buku', $pdfname);
        //     unlink(FCPATH . 'file_buku/' . $this->request->getVar('fileLama'));
        // }
        // // Generate nama unik untuk file PDF
        // $pdfName = $slug . '-file.pdf';
        // // Pindahkan file PDF ke folder yang ditentukan
        // $file->move(FCPATH . 'file_buku/', $pdfName);
        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul,
            // 'file' => $pdfname
        ]);
        session()->setFlashdata('pesan', 'Buku berhasil diubah');
        return redirect()->to(base_url() . 'buku');
    }
    public function pdf($slug)
    {
        $data['pdfName'] = $slug . '-file.pdf';
        return view('buku/pdf_viewer', $data);
    }
}
