<?php

namespace App\Controllers;

use App\Models\MaModel;

class Message extends BaseController
{
    public function index()
    {
        $messages = new MaModel();
        $data['message'] = $messages->orderBy('date', 'DESC')->findAll();
        
        return view('message', $data);
    }
    public function edit($username = null)
    {
      
     $messages= new MaModel();
 
     $data['message'] = $messages->where('username', $username)->first();
 
     return view('public/index.php/edit-user', $data);
    }
 
    public function update()
    {  
         
        $messages = new MaModel();
 
        $username = $this->request->getVar('username');
 
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'), 
            'messages' => $this->request->getPost('messages') 
        ];
 
        $save = $messages->update($username,$data);
 
        return redirect()->to( base_url('message') );
    }
    public function delete($username = null)
    {
 
     $messages = new MaModel();
 
     $data['row'] = $messages->where('username', $username)->delete();

     return redirect()->to( base_url('message') );
    }
}
