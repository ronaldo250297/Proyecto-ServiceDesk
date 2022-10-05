<?php 
namespace App\Models;

use CodeIgniter\Model;

class Area extends Model{
    protected $table      = 'areas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idare';
    protected $allowedFields = ['nomare','fonoare'];
}