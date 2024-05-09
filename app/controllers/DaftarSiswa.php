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
    public function hapus($id)
    {
        if ($this->model('DaftarSiswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/daftarsiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/daftarsiswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('DaftarSiswa_model')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('DaftarSiswa_model')->ubahDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/daftarsiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/daftarsiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = "Daftar siswa";
        $data['DaftarSiswa'] = $this->model('DaftarSiswa_model')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('daftarsiswa/index', $data);
        $this->view('templates/footer');
    }
}