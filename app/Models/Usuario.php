<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idusu';
    protected $allowedFields = ['dniusu','nomusu','apepausu','apemausu','passusu'];
}