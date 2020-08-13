<?php namespace App\Models;

use CodeIgniter\Model;

class JuegoModel extends Model{
    protected $table= 'juego';
    protected $primaryKey= 'idJ';
    protected $allowedFields=['idJ', 'nomJ', 'precio', 'ESRB', 'genero', 'plataforma'];
}