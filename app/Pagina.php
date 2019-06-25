<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    protected $timestamps = false;
    protected $fillable = ['titulo', 'descricao', 'url', 'image'];
    protected $hidden = ['id', 'data_post'];
}
