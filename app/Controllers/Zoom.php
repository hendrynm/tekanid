<?php

namespace App\Controllers;

use App\Models\DBZoom;
use JsonException;
use stdClass;

class Zoom extends BaseController
{
    public function ambil_token(): string
    {
        $zoom = new DBZoom();
        return $zoom->select("token")
            ->first()
            ->token;
    }

    public function update_token(): void
    {
        $zoom = new DBZoom();
        $query1 = $zoom->first();

        $waktu_asli = (new \DateTime('now'))->getTimestamp();
        $waktu_db = $query1->time;
        $waktu_expire = $waktu_db + 3600000;

        if($waktu_expire <= $waktu_asli)
        {
            $client = getenv("ZOOM_CLIENT_ID");
            $secret = getenv("ZOOM_CLIENT_SECRET");
            $kunci = base64_encode($client . ":" . $secret);
            $refresh =base64_decode(str_replace(['-','_'], ['+','/'], $query1->refresh));

            $curl1 = curl_init();
            $opsi1 = [
                CURLOPT_URL => "https://zoom.us/oauth/token?grant_type=refresh_token&refresh_token='" . $refresh . "'",
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_HTTPHEADER => [
                    "Content-Type: application/x-www-form-urlencoded",
                    "Authorization: Basic " . $kunci,
                ],
            ];
            curl_setopt_array($curl1, $opsi1);
            $request1 = curl_exec($curl1);
            curl_close($curl1);

            $baru_token = $request1->access_token;
            $baru_refresh = $request1->refresh_token;
            $baru_waktu = (new \DateTime('now'))->getTimestamp();

            $query2 = $zoom->where("id",1)
                ->set([
                "token" => "'" . $baru_token . "'",
                "refresh" => "'" . $baru_refresh . "'",
                "time" => $baru_waktu
            ])->update();
        }
    }

    function buat(): string
    {
        $data = $this->ambil_form();
        if($data->kode > 10)
        {
            try { return (json_encode("{ error: Kode lebih dari 10 digit }", JSON_THROW_ON_ERROR)); }
            catch (JsonException $e) { }
        }

        $this->update_token();

        $data1 = [
            "topic" => $data->topik,
            "agenda" => $data->pembuat,
            "type" => 2,
            "start_time" => $data->waktu,
            "timezone" => "Asia/Jakarta",
            "duration" => $data->durasi,
            "password" => $data->kode,
            "settings" => [
                "host_video" => false,
                "participant_video" => false,
                "mute_upon_entry" => true,
                "audio" => "voip",
                "waiting_room" => true,
            ],
        ];
        $opsi1 = [
            CURLOPT_URL => "https://api.zoom.us/v2/users/me/meetings",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data1 ,
            CURLOPT_HTTPHEADER => $this->header(),
        ];
        $curl1 = curl_init();
        curl_setopt_array($curl1,$opsi1);
        $request1 = curl_exec($curl1);
        curl_close($curl1);

        return $request1;
    }

    public function header(): array
    {
        return [
            "Content-Type: application/json; charset=UTF-8",
            "Authorization: Bearer " . $this->ambil_token(),
        ];
    }

    public function ambil_form(): object
    {
        $data               = new stdClass();
        $data->topik        = $this->request->getPost("topik");
        $data->waktu        = $this->request->getPost("waktu");
        $data->durasi       = $this->request->getPost("durasi");
        $data->kode         = $this->request->getPost("kode");
        $data->pembuat      = (new Admin)->id_pengguna();

        return $data;
    }
}
