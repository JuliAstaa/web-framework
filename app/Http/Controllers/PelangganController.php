<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public $profiles;

    function __construct()
    {
        $this->profiles = [
            1 => [
                "id" => 1,
                "nama" => "Saitya",
                "nim" => "123123123",
                "pfp" => "profile.jpg",
            ],
            2 => [
                "id" => 2,
                "nama" => "Cihuy",
                "nim" => "1234123122",
                "pfp" => "profile1.jpg",
            ],
            3 => [
                "id" => 3,
                "nama" => "Evo",
                "nim" => "90882133",
                "pfp" => "profile2.jpg",
            ],
            4 => [
                "id" => 4,
                "nama" => "Arya Chindo",
                "nim" => "86287342",
                "pfp" => "profile3.jpg",
            ],
        ];
    }
    public function profile()
    {
        return view("pelanggan.profile", ["profiles" => $this->profiles]);
    }

    public function show($id)
    {
        $profile = $this->profiles[$id];
        return view("pelanggan.detail", [
            "profile" => $profile,
        ]);
    }

    public function grade($id, $gradeName)
    {
        return "Pelanggan dengan ID $id memiliki grade $gradeName";
    }

    public function list(Request $request)
    {
        return $request->name . " " . $request->nim;
    }
}
