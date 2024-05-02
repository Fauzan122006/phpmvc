<?php

class About
{
    public function index($nama = 'Fauzan', $pekerjaan = 'Pelajar')
    {
        echo "Halo saya $nama, saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}

