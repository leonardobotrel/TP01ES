<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    protected $fillable = ['Id','Codigo','Nome','Uf'];
}
