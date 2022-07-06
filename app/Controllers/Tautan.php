<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DBTautan;
use stdClass;

class Tautan extends BaseController
{
    public function ringkas()
    {
        $data = $this->ambil_form();

        if($this->cek_ganda($data->pendek))
        {
            $tautan = new DBTautan();
            $query1 = $tautan->insert([
                "panjang" => $data->panjang,
                "pendek" => $data->pendek,
                "id_pengguna" => $data->id_pengguna,
            ]);
            $tautan = "https://tekan.id/" . $data->pendek;

            return ($query1 !== null) ?
                redirect()->to(base_url("/"))
                    ->with("sukses","Tautan sudah disingkat menjadi <b><a href='" . $tautan . "' target='_blank'>" . $tautan . "</a></b>") :
                redirect()->to(base_url("/"))
                    ->with("gagal","Tautan <b>gagal disimpan</b> ke penyimpanan data internet. Silakan coba lagi.");
        }
        return redirect()->to(base_url("/"))
            ->with("gagal","Tautan singkat <b>sudah digunakan orang lain</b>. Silakan coba tautan lainnya.");
    }

    public function cek_ganda($pendek): bool
    {
        $tautan = new DBTautan();
        $query1 = $tautan->where("pendek",$pendek)
            ->countAllResults();

        return ($query1 === 0);
    }

    public function ambil_form(): object
    {
        $data               = new stdClass();
        $data->id_pengguna  = $this->request->getPost("id_pengguna");
        $data->panjang      = $this->request->getPost("panjang");
        $data->pendek       = $this->request->getPost("pendek");

        return $data;
    }
}
