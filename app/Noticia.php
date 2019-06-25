<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $timestamps = false;
    protected $fillable = ['titulo', 'conteudo', 'categoria', 'image'];
    protected $hidden = ['id', 'data_post'];
    protected $table = 'noticias';
}
