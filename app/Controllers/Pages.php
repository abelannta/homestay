<?php

namespace App\Controllers;

use App\Models\Page_LoginModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    protected $userModel;
    protected $allowedFields = [];
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('Form_Login/Page_Login', $data);
    }


    public function profile($receive)
    {
        session();
        $take = $this->userModel->getUser($receive);
        $data = [
            'title' => 'Profile',
            'gets' => $take,
            'validasi' => \Config\Services::validation()

        ];
        return view('Profile_Member/Page_Profile', $data);
    }
    public function edit($id)
    {
        $takes = $this->request->getVar('idku');
        //validasi input 
        $nama_lama = $this->userModel->getUser($takes);
        if ($nama_lama['username'] == $this->request->getVar('namaku')) {
            $rulers = 'required';
        } else {
            $rulers = 'required|is_unique[users.username]';
        }
        if (!$this->validate([
            'namaku' => [
                'rules' =>  $rulers,
                'errors' => [
                    'required' => 'Data Nama tidak boleh kosong',
                    'is_unique' => 'Username telah terdaftar pada database'
                ]
            ]
        ])) {
            $validation =  \Config\Services::validation()->listErrors();
            return redirect()->to("/profile/" . $takes)->withInput()->with('validasi', $validation);
        }

        $this->userModel->save(
            [
                'id' => $id,
                'username' => $this->request->getVar('namaku'),
                'Alamat' => $this->request->getVar('alamatku'),
                'no_telp' => $this->request->getVar('no_telpku')
            ]
        );
        return redirect()->to("/profile/" . $takes);
    }

    public function register()
    {
        $data = [
            'title' => 'Form Registrasi'
        ];
        return view('Form_Regist/Page_Regist', $data);
    }
    public function avatar($id)
    {
        $takes = $this->request->getVar('id');
        $this->userModel->save([
            'id' => $id,
            'image' => $this->request->getVar('customRadio')
        ]);
        return redirect()->to("/profile/" . user()->id);
    }



    //--------------------------------------------------------------------

}
