<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Para adicionar os produtos atráves do create.
    protected $fillable = ['product_name', 'price'];
}
