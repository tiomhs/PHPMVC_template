<?php 

class About {
    public function index($nama = 'Tio', $pekerjaan ='Siswa SMK'){
        echo "Halo Nama saya $nama, saya seorang $pekerjaan";
    }
    public function page(){
        echo 'about/pagr';
    }
}