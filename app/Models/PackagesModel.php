<?php

namespace App\Models;

use CodeIgniter\Model;

class PackagesModel extends Model
{
    protected $db;
    protected $table = 'packages';
    
    public function __construct()
    {
       parent::__construct();
    }

    protected $allowedFields = ['service_id', 'name', 'description', 'price', 'created_by' , 'updated_by'];

    public function service()
    {
        return $this->belongsTo('App\Models\ServiceModel', 'service_id');
    }


    public function deletePackage($id) {
        return $this->delete($id);
    }

    public function updatePackage($id , $data) {
        $this->db->table('packages')
        ->where('id', $id)
        ->update($data);
    }


    
 

    
  
}
