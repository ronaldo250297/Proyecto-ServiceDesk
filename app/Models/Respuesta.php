<?php 
namespace App\Models;

use CodeIgniter\Model;

class Respuesta extends Model{
    protected $table      = 'respuestas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idres';
    protected $allowedFields = ['detres','idinc','idemp'];
}