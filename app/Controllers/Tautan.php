<?php

namespace App\Controllers;

use App\Models\DBTautan;
use CodeIgniter\HTTP\RedirectResponse;
use stdClass;

class Tautan extends BaseController
{
    public function alih($pendek): RedirectResponse
    {
        $tautan = new DBTautan();
        $query1 = $tautan->select("panjang")
            ->where("pendek",$pendek)
            ->first();

        return ($query1 !== null) ? redirect()->to($query1->panjang) : view("errors/404");
    }

    public function dasbor($id_pengguna): array
    {
        $tautan = new DBTautan();
        return $tautan->where("id_pengguna",$id_pengguna)
            ->orderBy("waktu","desc")
            ->get()
            ->getResult();
    }

    public function ringkas(): RedirectResponse
    {
        $data = $this->ambil_form();

        if(!filter_var($data->panjang, FILTER_VALIDATE_URL) === false)
        {
            if($this->cek_ganda($data->pendek))
            {
                $pranala = "https://tekan.id/" . $data->pendek;

                return ($this->input_baru($data)) ?
                    redirect()->to(base_url("/"))
                        ->with("sukses","Tautan sudah disingkat menjadi <b><a href='" . $pranala . "' target='_blank'>" . $pranala . "</a></b>") :
                    redirect()->to(base_url("/"))
                        ->with("gagal","Tautan <b>gagal disimpan</b> ke penyimpanan data internet. Silakan coba lagi.");
            }
            return redirect()->to(base_url("/"))
                ->with("gagal","Tautan singkat <b>sudah digunakan orang lain</b>. Silakan coba tautan lainnya.");
        }
        return redirect()->to(base_url("/"))
            ->with("gagal","Tautan yang dimasukkan <b>tidak valid</b>. Silakan cek kembali.");
    }

    public function ringkas_admin(): RedirectResponse
    {
        $data = $this->ambil_form();

        if(!filter_var($data->panjang, FILTER_VALIDATE_URL) === false)
        {
            if($this->cek_ganda($data->pendek))
            {
                $pranala = "https://tekan.id/" . $data->pendek;

                return ($this->input_baru($data)) ?
                    redirect()->to(base_url("/admin/tautan/dasbor"))
                        ->with("sukses","Tautan sudah disingkat menjadi <b><a href='" . $pranala . "' target='_blank'>" . $pranala . "</a></b>") :
                    redirect()->to(base_url("/admin/tautan/buat"))
                        ->with("gagal","Tautan <b>gagal disimpan</b> ke penyimpanan data internet. Silakan coba lagi.");
            }
            return redirect()->to(base_url("/admin/tautan/buat"))
                ->with("gagal","Tautan singkat <b>sudah digunakan orang lain</b>. Silakan coba tautan lainnya.");
        }
        return redirect()->to(base_url("/admin/tautan/buat"))
            ->with("gagal","Tautan yang dimasukkan <b>tidak valid</b>. Silakan cek kembali.");
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

    public function input_baru($data): bool
    {
        $waktu = (new \DateTime('now'))
            ->setTimezone(new \DateTimeZone('Asia/Jakarta'))
            ->format('Y-m-d H:i:s');

        $tautan = new DBTautan();
        $query1 = $tautan->insert([
            "panjang" => $data->panjang,
            "pendek" => $data->pendek,
            "id_pengguna" => $data->id_pengguna,
            "waktu" => $waktu,
        ]);

        return ($query1 !== null);
    }
}
