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

    public function home()
    {
        $data = [
            'title' => 'Home | Buildex'
        ];
        echo view('pages/home', $data);
    }

    public function desain()
    {
        $jsonFilePath = FCPATH . 'data/rumah.json';
        $jsonData = json_decode(file_get_contents($jsonFilePath), true);

        $data = [
            'title' => 'Desain | Buildex',
            'rumah' => $jsonData
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

    public function detail($id)
    {
        $jsonFilePath = FCPATH . 'data/rumah.json';
        $jsonData = json_decode(file_get_contents($jsonFilePath), true);
        $jsoncontrpath = FCPATH . 'data/contractor.json';
        $jsoncontract = json_decode(file_get_contents($jsoncontrpath), true);

        $rumahDetail = null;
        foreach ($jsonData as $rumah) {
            if ($rumah['id'] == $id) {
                $rumahDetail = $rumah;
                break;
            }
        }

        $data = [
            'title' => 'Detail | Buildex',
            'rumahDetail' => $rumahDetail,
            'contractors' => $jsoncontract
        ];
        echo view('pages/detail', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'login | Buildex'
        ];
        echo view('pages/login', $data);
    }
}
