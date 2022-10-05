<?php 
namespace App\Models;

use CodeIgniter\Model;

class Incidencia extends Model{
    protected $table      = 'incidencias';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idinc';
    protected $allowedFields = ['nominc','detinc','imginc','idusu'];
}