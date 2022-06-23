<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function index()
    {
        return view("beranda/index");
    }

    public function produk()
    {
        return view("beranda/produk");
    }

    public function biaya()
    {
        return view("beranda/biaya");
    }

    public function testimoni()
    {
        return view("beranda/testimoni");
    }

    public function kontak()
    {
        return view("beranda/kontak");
    }
}
