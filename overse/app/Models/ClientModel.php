<?php namespace App\Models; //package

use CodeIgniter\Model; //import

class ClientModel extends Model{
    protected $table= 'cliente';
    protected $primaryKey= 'idC';
    protected $allowedFields=['idC', 'nomC', 'telC', 'corC'];
}