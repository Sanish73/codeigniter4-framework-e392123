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

    function postPackages()
{
    $packageModel = new PackageModel();
    
    $data = [
        'service_id' => $this->request->getGet('id'), // Retrieve service_id from URL parameter
        'name' => $this->request->getPost('packageName'),
        'price' => $this->request->getPost('packagePrice'),
        'description' => $this->request->getPost('packageDescription'),
        'created_by' => 1, // Set created_by value (replace with appropriate value)
        'created_at' => date('Y-m-d H:i:s'), // Set created_at value to current timestamp
        'updated_by' => 0, // Set updated_by value to 0 initially
        'updated_at' => date('Y-m-d H:i:s'), // Set updated_at value to current timestamp
    ];
    
    $packageModel->insert($data); // Insert the record
    
    // ... rest of your code
}

    

}
