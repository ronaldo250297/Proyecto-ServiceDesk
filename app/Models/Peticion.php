<?php 
namespace App\Models;

use CodeIgniter\Model;

class Peticion extends Model{
    protected $table      = 'peticiones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idpet';
    protected $allowedFields = ['titpet','detpet','imgpet','idusu'];
}