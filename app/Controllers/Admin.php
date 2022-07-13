<?php

namespace App\Controllers;

use App\Models\DBPengguna;

class Admin extends BaseController
{
    public function beranda(): string
    {
        $pengguna = new DBPengguna();
        $query1 = $pengguna->select("nama")
            ->where("id_pengguna",$this->id_pengguna())
            ->first();

        return view("admin/index",["data1" => $query1]);
    }

    public function tautan_dasbor(): string
    {
        $data1 = (new Tautan())->dasbor($this->id_pengguna());

        return view("admin/tautan/dasbor",["data1" => $data1]);
    }

    public function tautan_buat(): string
    {
        return view("admin/tautan/buat");
    }

    public function zoom_dasbor(): string
    {
        return view("admin/zoom/dasbor");
    }

    public function id_pengguna(): int
    {
        return session()->get("id_pengguna");
    }
}
