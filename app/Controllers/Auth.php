<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DBPengguna;
use stdClass;

class Auth extends BaseController
{
    public function daftar()
    {
        $data = $this->ambil_form();

        if(!$this->cek_ganda($data->posel))
        {
            $pengguna = new DBPengguna();
            $query1 = $pengguna->insert([
                "nama" => $data->nama,
                "posel" => $data->posel,
                "password" => password_hash($data->password,PASSWORD_DEFAULT),
            ]);

            return ($query1 > 0) ?
                redirect()->to(base_url("/"))
                    ->with("sukses","Pendaftaran akun <b>" . $data->nama . " </b> telah berhasil. Silakan melakukan login.") :
                redirect()->to(base_url("/"))
                    ->with("gagal","Pendaftaran akun <b>" . $data->nama . " </b> tidak berhasil. Silakan coba beberapa saat lagi.");
        }
        return redirect()->to(base_url("/"))
            ->with("gagal","Akun <b>" . $data->posel . "</b> sudah pernah didaftarkan. Silakan melakukan login.");
    }

    public function masuk()
    {
        $data = $this->ambil_form();

        $pengguna = new DBPengguna();
        $query1 = $pengguna->where("posel",$data->posel)
            ->first();

        if($query1 !== null)
        {
            if(password_verify($data->password,$query1->password))
            {
                $this->buang_sesi();
                $this->daftar_sesi($query1->id_pengguna);
                return redirect()->to(base_url("/"));
            }
            return redirect()->to(base_url("/"))
                ->with("gagal","Kredensial akun <b>" . $data->posel . " </b> salah. Silakan coba kembali.");
        }
        return redirect()->to(base_url("/"))
            ->with("gagal","Akun <b>" . $data->posel . " </b> belum terdaftar di sistem. Silakan lakukan pendaftaran terlebih dahulu.");
    }

    public function keluar()
    {
        $this->buang_sesi();
        return redirect()->to(base_url("/"))
            ->with("berhasil","Berhasil keluar dari akses akun.");
    }

    public function ambil_form(): object
    {
        $data           = new stdClass();
        $data->nama     = $this->request->getPost("nama");
        $data->posel    = $this->request->getPost("posel");
        $data->password = $this->request->getPost("password");

        return $data;
    }

    public function cek_ganda($posel): bool
    {
        $pengguna = new DBPengguna();
        $query1 = $pengguna->where("posel",$posel)
            ->countAllResults();

        return $query1 > 0;
    }

    public function daftar_sesi($id_pengguna): void
    {
        session()->set("id_pengguna",$id_pengguna);
    }

    public function buang_sesi(): void
    {
        session()->remove("id_pengguna");
    }
}