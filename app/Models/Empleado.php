<?php 
namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model{
    protected $table      = 'empleados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idemp';
    protected $allowedFields = ['dniemp','nomemp','apepaemp','apemaemp','passemp','fonoemp'];
}