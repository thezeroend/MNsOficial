<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public $timestamps = false;
    protected $fillable = ['titulo', 'descricao', 'url', 'image'];
    protected $hidden = ['id', 'data_post'];
    protected $table = 'slides';
}
