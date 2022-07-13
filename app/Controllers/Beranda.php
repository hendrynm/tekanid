<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index(): string
    {
        return view("beranda/index");
    }

    public function produk(): string
    {
        return view("beranda/produk");
    }

    public function biaya(): string
    {
        return view("beranda/biaya");
    }

    public function testimoni(): string
    {
        return view("beranda/testimoni");
    }

    public function kontak(): string
    {
        return view("beranda/kontak");
    }
}
