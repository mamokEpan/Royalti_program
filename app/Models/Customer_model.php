<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer_model extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['customer_name', 'customer_address'];
}
