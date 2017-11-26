<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'descripcion',
    ];

    public function noticias() {
    	return $this->hasMany('App\Noticia', 'categoria_id');
    }

    public $timestamps = false;
}
