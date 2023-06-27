<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicesModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'contact', 'location', 'description'];
    
    protected $db;

    public function __construct()
    {
       parent::__construct();
    }

    public function deleteService($id) {
        return $this->delete($id);
    }
    
    public function packages()
    {
        return $this->hasMany('App\Models\PackageModel', 'service_id');
    }

    public function getPackagesByServiceId($serviceId)
    {
        $query = $this->db->table('packages')
                      ->where('service_id', $serviceId)
                      ->get();

    return $query->getResultArray();
    }

}
