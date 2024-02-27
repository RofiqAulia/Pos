<?php

namespace App\Http\Controllers;

class  ArticleController extends Controller {

    public function articles($id){
        return 'Halaman majalah ini pada nomer : '. $id;
    }
}