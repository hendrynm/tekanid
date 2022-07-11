<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DBPengguna;
use App\Models\DBTautan;

class Admin extends BaseController
{
    public function beranda()
    {
        $pengguna = new DBPengguna();
        $query1 = $pengguna->select("nama")
            ->where("id_pengguna",$this->id_pengguna())
            ->first();

        return view("admin/index",["data1" => $query1]);
    }

    public function tautan_dasbor()
    {
        $tautan = new DBTautan();
        $query1 = $tautan->where("id_pengguna",$this->id_pengguna())
            ->orderBy("waktu","desc")
            ->get()
            ->getResult();

        return view("admin/tautan/dasbor",["data1" => $query1]);
    }

    public function tautan_buat()
    {
        return view("admin/tautan/buat");
    }

    public function id_pengguna(): int
    {
        return session()->get("id_pengguna");
    }
}
