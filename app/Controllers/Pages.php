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
        $jsonFilePath = FCPATH . 'data/contractor.json';
        $jsonData = json_decode(file_get_contents($jsonFilePath), true);

        $data = [
            'title' => 'Contractor | Buildex',
            'contractors' => $jsonData
        ];
        echo view('pages/contractor', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail | Buildex'
        ];
        echo view('pages/detail', $data);
    }
}
