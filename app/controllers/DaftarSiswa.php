<?php

class DaftarSiswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar siswa";
        $data['DaftarSiswa'] = $this->model('DaftarSiswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('daftarsiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail siswa";
        $data['siswa'] = $this->model('DaftarSiswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('daftarsiswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('DaftarSiswa_model')->tambahDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/daftarsiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/daftarsiswa');
            exit;
        }
    }
}