<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    protected $fillable = ['titulo', 'descricao', 'usuarios_id', 'tipos_id'];
}
