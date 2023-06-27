<?php

namespace App\Controllers;

use Config\Database;
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
       
        return redirect()->to(base_url('/'));
    }

    public function pakageList($id)
    {
        $servicesModel = new ServicesModel();
        $x = new PackagesModel();
        $data['data'] = $x->findAll();

       

        return view('packagePage',[
            'id' => $id,
            'data' =>$data,
            'packages' => $servicesModel->getPackagesByServiceId($id)
        ]);
    }

    public function postPackages()
    {
        $packageModel = new PackagesModel();
        $pack = $this->request->getPost('service_id');
       
        $data = [
            'service_id' => $this->request->getPost('service_id'),
            'name' => $this->request->getPost('packageName'),
            'price' => $this->request->getPost('packagePrice'),
            'description' => $this->request->getPost('packageDescription'),
            'created_by' => 1,
            'updated_by' => 1,
        ];

        // print_r($data);
        $packageModel->insert($data);
        return redirect()->to(base_url('/add-package/' . $pack));
    }

    public function deleteServices($id)
    {       
        $servicesModel = new ServicesModel();
        $servicesModel->deleteService($id);
    
        return redirect()->to(base_url('/'));
    }

    public function updateService($id)
    {       
        $servicesModel = new ServicesModel();
      
        $data = [            
            'name' => $this->request->getPost('serviceName'),
            'location' => $this->request->getPost('serviceLocation'),
            'contact' => $this->request->getPost('serviceContact'),
            'description' => $this->request->getPost('serviceDescription'),
        ];
        $servicesModel->updateService($id, $data);   
    
        return redirect()->to(base_url('/'));
    }

    public function deletePackages($id)
    {       
        $packageModel = new PackagesModel();
        $pack = $this->request->getGet('service_id');
        
        $packageModel->deletePackage($id);
    
        return redirect()->back();
    }


    
}
