<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'titular', 'entrada', 'cuerpo', 'imagen', 'fecha', 'categoria_id', 'usuario_id',
    ];

    public function categoria() {
    	return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function usuario() {
    	return $this->belongsTo('App\Usuario', 'usuario_id');
    }

    public $timestamps = false;
}
