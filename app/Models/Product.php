<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // Para adicionar os produtos atráves do create.
    protected $fillable = ['product_name', 'price'];

    // Para fazer soft delete.
    use SoftDeletes;
}
