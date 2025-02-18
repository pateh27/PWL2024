<?php 
    namespace App\Http\Controllers;
    use illuminate\Http\Request;
    class PageController extends Controller{
        public function index1(){
            return 'Selamat Datang';
        }
        public function about(){
            return '2341720119, Muhammad Al-Fatih Ulima Robby';
        }
        public function articles($id){
            return 'Tampilkan Halaman Artikel dengan Id ' . $id;
        }
    }
?>