<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\CatatanPerjalanan_model;
use Config\Services;

class CatatanPerjalanan extends BaseController
{
    function __construct()
    {
        Services::session();
    }

    public function index()
    {
        if (!Services::session()->get("nik")) {
            return redirect()->to(base_url('/login'));
        }

        $data = [
            "userdata" => User::findByNIK(Services::session()->get("nik")),
            "catatan_perjalanan" => CatatanPerjalanan_model::getAll()
        ];

        $userdata = User::findByNIK(Services::session()->get("nik"));
        return view("catatan_perjalanan", $data);
    }
}