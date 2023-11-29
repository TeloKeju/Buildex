<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Buildex'
        ];
        echo view('pages/home', $data);
    }

    public function desain()
    {
        $data = [
            'title' => 'Desain | Buildex'
        ];
        echo view('pages/desain', $data);
    }

    public function contractor()
    {
        $data = [
            'title' => 'Contractor | Buildex'
        ];
        echo view('pages/contractor', $data);
    }
}
