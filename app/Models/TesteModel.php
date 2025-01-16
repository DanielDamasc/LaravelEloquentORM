<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TesteModel extends Model
{
    // várias propriedades a cerca das tabelas podem ser definidas no model
    // Eloquent Model Conventions (DOCUMENTATION)

    // se quiser definir qual a tabela do model
    protected $table = 'products';

    // definir a chave primária
    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';
}
