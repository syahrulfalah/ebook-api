<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Routing\controller as Controller;

class Authcontroller extends Controller
{
    public function me()
    {
        return
        ["NIS" => "3103118130",
        "Nama" => "Syahrul Falah",
        "Gender" => "Laki-laki",
        "Kelas" => "XII RPL 4"
        ];
    }
}
