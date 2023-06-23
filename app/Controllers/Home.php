<?php

namespace App\Controllers;

use App\Models\ServicesModel;

class Home extends BaseController
{
    public function index()
    {
        $servicesModel = new ServicesModel();
        $data['data'] = $servicesModel->findAll();
        
        return view('welcome_message' , $data);
    }

    function postServices()
    {
        $servicesModel = new ServicesModel();
        $data = [
            'name' => $this->request->getPost('serviceName'),
            'contact' => $this->request->getPost('serviceContact'),
            'location' => $this->request->getPost('serviceLocation'),
            'description' => $this->request->getPost('serviceDescription'),
        ];

        // echo "<script>alert('Data: " . json_encode($data) . "');</script>";

        $servicesModel->insert($data);
        // code to redirect to index route
        return redirect()->to(base_url('/'));
    }

    function pakageList(){
       
        return view('packagePage');
    }

}
