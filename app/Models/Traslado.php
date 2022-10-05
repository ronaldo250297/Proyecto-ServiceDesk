<?php 
namespace App\Models;

use CodeIgniter\Model;

class Traslado extends Model{
    protected $table      = 'traslados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idtra';
    protected $allowedFields = ['idare','idinc'];
}