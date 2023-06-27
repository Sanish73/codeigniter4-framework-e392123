<?php

namespace App\Models;

use CodeIgniter\Model;

class PackagesModel extends Model
{
    protected $table = 'packages';

    protected $allowedFields = ['service_id', 'name', 'description', 'price', 'created_by' , 'updated_by'];

    public function service()
    {
        return $this->belongsTo('App\Models\ServiceModel', 'service_id');
    }
  
}
