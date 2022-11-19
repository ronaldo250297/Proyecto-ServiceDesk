<?php 
namespace App\Models;

use CodeIgniter\Model;

class Pregunta extends Model{
    protected $table      = 'preguntas';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idpre';
    protected $allowedFields = ['pregun','respre'];
}