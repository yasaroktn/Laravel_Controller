<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function bilinmeyen_uye()
    {
        return "URL de /uye/{uye ismi} kismi olmasi gerekiyor.";
    }
    public function uye($slug)
    {
        return "welcome $slug";
    }

    public function paylasimlar($slug)
    {
        return "$slug paylasimlar";
    }

    public function paylasim($slug, $id)
    {
        return "$slug $id numarali paylasim";
    }

}
