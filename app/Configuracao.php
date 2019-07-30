<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    public $timestamps = false;
    protected $fillable = ['logradouro',
        'numero',
        'complemento',
        'bairro',
        'CEP',
        'municipio',
        'UF',
        'telefone_1',
        'telefone_2',
        'email',
        'facebook',
        'twitter',
        'google',
        'instagram',
        'youtube'];
    protected $hidden = ['id'];

    //Seleciona a table no BD
    protected $table = "configuracoes";
}
