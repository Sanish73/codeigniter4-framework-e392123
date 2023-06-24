<?php

namespace App\Controllers;

use App\Models\PackagesModel;
use App\Models\ServicesModel;

class Home extends BaseController
{
    public function index()
    {
        $servicesModel = new ServicesModel();
        $data['data'] = $servicesModel->findAll();

        return view('welcome_message', $data);
    }

    public function postServices()
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

    public function pakageList()
    {

        return view('packagePage');
    }

    public function postPackages()
    {
        $packageModel = new PackagesModel();
        $pack = $this->request->getPost('packageName');
        echo $pack;

        // $data = [
        //     'service_id' => $this->request->getPost('service_id'),
        //     'name' => $this->request->getPost('packageName'),
        //     'price' => $this->request->getPost('packagePrice'),
        //     'description' => $this->request->getPost('packageDescription'),
        //     'created_by' => $this->request->getPost('service_id'),
        //     'updated_by' => $this->request->getPost('service_id'),
        // ];

        // $packageModel->insert($data); // Insert the record
        // return redirect()->to(base_url('/'));

        
    }

}
