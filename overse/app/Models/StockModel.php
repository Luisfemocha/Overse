<?php namespace App\Models;

use CodeIgniter\Model;

class StockModel extends Model{
    protected $table= 'stock';
    //protected $primaryKey= 'idS';
    protected $allowedFields=['idJ1', 'encargado', 'vent'];
}