<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        $user = new \App\Models\UserModel();
        if($user->countAllResults()==0){
            $item = ['username'=>'admin', 'password'=>password_hash('admin', PASSWORD_DEFAULT), 'role'=>'Admin'];
            $user->insert($item);
        }
        return view('login');
    }
    
    function check() {
        $user = new \App\Models\UserModel();
        $data = $this->request->getPost();
        $data_user = $user->where('username', $data['username'])->first();
        if(password_verify($data['password'], $data_user['password'])){
            $item = ['nama'=>$data_user['username'], 'role'=>$data_user['role']];
            session()->set($item);
            return redirect()->to(base_url());
        }
    }
    function logout()  {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
