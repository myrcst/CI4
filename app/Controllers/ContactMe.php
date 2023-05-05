<?php

namespace App\Controllers;

use App\Models\MaModel;

class ContactMe extends BaseController
{
    public function index()
    {
        return view('contactme');
    }
    public function insert()
{
    $messages = new MaModel();
    $data = [
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'), 
        'phone' => $this->request->getPost('phone'), 
        'messages' => $this->request->getPost('messages') 
    ];
    $messages->insert($data);
    return redirect()->to(base_url('message'));
    
}

    


}
