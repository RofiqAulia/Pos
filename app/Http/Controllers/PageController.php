<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function index(){
            return 'Selamat Datang';
        }
    
        public function about(){
            return 'Nama : M. Rofiq Aulia | NIM : 2241720038';
        }
    
        public function articles($id){
            return 'Halaman Artikel dengan ID : '. $id;
        }
}
