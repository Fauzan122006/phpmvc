<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['deskhome'] = $this->model('deskhome_model')->getDesk();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}