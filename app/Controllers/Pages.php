<?php

namespace App\Controllers;

use App\Models\PesananModel;
use Twilio\Rest\Client;

class Pages extends BaseController
{
    public function __construct()
    {
        $this->pesananmodel = new PesananModel();
    }

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

    public function daftarclient()
    {
        $pesanan = $this->pesananmodel->findAll();

        $data = [
            'title' => 'Daftar Client',
            'client' => $pesanan
        ];
        
        echo view('pages/daftarclient', $data);
    }

    public function pesanan()
    {
        $nama = $this->request->getVar('nama');
        $nik = $this->request->getVar('nik');
        $no_telp = $this->request->getVar('no_telp');
        $alamat = $this->request->getVar('alamat');
        $email = $this->request->getVar('email');
        $tanggal_pembangunan = $this->request->getVar('tanggal_pembangunan');
        $contractorSelect = $this->request->getVar('contractorSelect');
        $housePrice = $this->request->getVar('housePrice');
        $luasBangunan = $this->request->getVar('luasBangunan');
        $luasTanah = $this->request->getVar('luasTanah');
        $luasBangunan = $this->request->getVar('luasBangunan');
        $fitur1 = $this->request->getVar('fitur1');
        $fitur2 = $this->request->getVar('fitur2');
        $fitur3 = $this->request->getVar('fitur3');
        $description1 = $this->request->getVar('description1');
        $description2 = $this->request->getVar('description2');
        $description3 = $this->request->getVar('description3');
        $description4 = $this->request->getVar('description4');
        $title = $this->request->getVar('title');

        $data = [
            'nama' => $nama,
            'nik' => $nik,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'email' => $email,
            'tanggal_pembangunan' => $tanggal_pembangunan,
            'contractor' => $contractorSelect,
            'housePrice' => $housePrice,
            'luasBangunan' => $luasBangunan,
            'luasTanah' => $luasTanah,
            'luasBangunan' => $luasBangunan,
            'fitur1' => $fitur1,
            'fitur2' => $fitur2,
            'fitur3' => $fitur3,
            'description1' => $description1,
            'description2' => $description2,
            'description3' => $description3,
            'description4' => $description4,
            'title' => $title
        ];

        $this->pesananmodel->insert($data);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Message sent successfully']);
    }

    public function detailpesanan($id)
    {
        $pesanan = $this->pesananmodel->find($id);

        $data = [
            'title' => "Detail Pesanan",
            'pesanan' => $pesanan
        ];

        return view('pages/detailpesanan', $data);
    }

    public function update_status()
    {
        if ($this->request->isAJAX()) {
            $orderId = $this->request->getPost('id');
            $status = $this->request->getPost('status');

            $this->pesananmodel->updateStatus($orderId, $status);

            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
        }
    }
    public function update_start()
    {
        if ($this->request->isAJAX()) {
            $orderId = $this->request->getPost('id');
            $status = $this->request->getPost('status');

            $this->pesananmodel->updateStart($orderId, $status);

            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
        }
    }
    public function update_done()
    {
        if ($this->request->isAJAX()) {
            $orderId = $this->request->getPost('id');
            $status = $this->request->getPost('status');

            $this->pesananmodel->updateDone($orderId, $status);

            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
        }
    }
}
