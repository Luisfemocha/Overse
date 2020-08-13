<?php namespace App\Models;

use CodeIgniter\Model;

class VentaModel extends Model{
    protected $table= 'venta';
    protected $primaryKey= 'idV';
    protected $allowedFields=['idV', 'emp1', 'valor', 'fecha'];
}