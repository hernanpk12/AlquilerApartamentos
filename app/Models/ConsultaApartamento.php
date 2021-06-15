<?php 

namespace App\Models;
use CodeIgniter\Model;

class ConsultaApartamento extends Model{
    protected $table = 'crudusuario';

    protected $primaryKey = 'id';

    protected $allowedFields = ['Nombre', 'apartamento','Telefono'];
}