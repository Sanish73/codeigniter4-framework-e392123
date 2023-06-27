<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicesModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'contact', 'location', 'description'];

    public function deleteService($id) {
        return $this->delete($id);
    }
}
