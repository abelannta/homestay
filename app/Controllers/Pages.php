<?php

namespace App\Controllers;

use App\Models\Page_LoginModel;
use App\Models\UserModel1;
use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    protected $userModel;
    protected $allowedFields = [];
    public function __construct()
    {
        $this->userModel = new UserModel1();
    }
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('Form_Login/Page_Login', $data);
    }

    public function about()
    {
        $take = $this->userModel->findAll();
        $data = [
            'title' => 'Home',
            'datas' => $take
        ];

        return view('pages/about', $data);
    }
    public function detail($email)
    {

        $data = [
            'title' => 'Regist View',
            'gets' => $this->userModel->getUser($email)

        ];
        return view('pages/home', $data);
    }
    public function profile($receive)
    {
        $take = $this->userModel->getUser($receive);
        $data = [
            'title' => 'Profile',
            'gets' => $take
        ];
        return view('Profile_Member/Page_Profile', $data);
    }
    public function edit($id)
    {
        $takes = $this->request->getVar('id');
        $this->userModel->save(
            [
                'id' => $id,
                'username' => $this->request->getVar('namaku'),
                'Alamat' => $this->request->getVar('alamatku'),
                'no_telp' => $this->request->getVar('no_telpku')
            ]
        );
        return redirect()->to("/profile/" . user()->id);
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
