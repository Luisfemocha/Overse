<?php namespace App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model{
    protected $table= 'empresa';
    protected $primaryKey= 'idEmp';
    protected $allowedFields=['idEmp', 'nomEmp', 'telEmp', 'corEmp', 'dirEmp'];
}