<?php

namespace App\Controllers;

use App\Models\DBTautan;
use CodeIgniter\HTTP\RedirectResponse;
use DateTime;
use DateTimeZone;
use stdClass;

class Tautan extends BaseController
{
    public DBTautan $tautan;

    public function __construct()
    {
        $this->tautan = new DBTautan();
    }

    public function alih($pendek)
    {
        $query1 = $this->tautan->select("panjang")
            ->where("pendek",$pendek)
            ->first();

        return ($query1 !== null) ? redirect()->to($query1->panjang) : view("errors/404");
    }

    public function dasbor($id_pengguna): array
    {
        return $this->tautan->where("id_pengguna",$id_pengguna)
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

                if($this->cek_valid($pranala))
                {
                    return ($this->input_baru($data)) ?
                        redirect()->to(base_url("/"))
                            ->with("sukses","Tautan sudah disingkat menjadi <b><a href='" . $pranala . "' target='_blank'>" . $pranala . "</a></b>") :
                        redirect()->to(base_url("/"))
                            ->with("gagal","Tautan <b>gagal disimpan</b> ke penyimpanan data internet. Silakan coba lagi.");
                }
                return redirect()->to(base_url("/"))
                    ->with("gagal","Tautan pendek tidak valid. Coba gunakan tautan pendek lain.");
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

                if($this->cek_valid($pranala))
                {
                    return ($this->input_baru($data)) ?
                        redirect()->to(base_url("/admin/tautan/dasbor"))
                            ->with("sukses","Tautan sudah disingkat menjadi <b><a href='" . $pranala . "' target='_blank'>" . $pranala . "</a></b>") :
                        redirect()->to(base_url("/admin/tautan/buat"))
                            ->with("gagal","Tautan <b>gagal disimpan</b> ke penyimpanan data internet. Silakan coba lagi.");
                }
                return redirect()->to(base_url("/admin/tautan/buat"))
                    ->with("gagal","Tautan pendek tidak valid. Coba gunakan tautan pendek lain.");
            }
            return redirect()->to(base_url("/admin/tautan/buat"))
                ->with("gagal","Tautan singkat <b>sudah digunakan orang lain</b>. Silakan coba tautan lainnya.");
        }
        return redirect()->to(base_url("/admin/tautan/buat"))
            ->with("gagal","Tautan yang dimasukkan <b>tidak valid</b>. Silakan cek kembali.");
    }

    public function cek_ganda($pendek): bool
    {
        $query1 = $this->tautan->where("pendek",$pendek)
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
        $waktu = (new DateTime('now'))
            ->setTimezone(new DateTimeZone('Asia/Jakarta'))
            ->format('Y-m-d H:i:s');

        $query1 = $this->tautan->insert
        ([
            "panjang" => $data->panjang,
            "pendek" => $data->pendek,
            "id_pengguna" => $data->id_pengguna,
            "waktu" => $waktu,
        ]);

        return ($query1 !== null);
    }

    public function cek_valid($data): bool
    {
        return preg_match('%^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z0-9\x{00a1}-\x{ffff}][a-z0-9\x{00a1}-\x{ffff}_-]{0,62})?[a-z0-9\x{00a1}-\x{ffff}]\.)+(?:[a-z\x{00a1}-\x{ffff}]{2,}\.?))(?::\d{2,5})?(?:[/?#]\S*)?$%iuS',$data);
    }
}
