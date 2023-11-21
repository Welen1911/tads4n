<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'email', 'senha'
    ];

    function telefone(){
        return $this->hasOne(Telefone::class);
    }

    function endereco(){
        return $this->hasMany(Endereco::class);
    }
}
