<?php

namespace laravelinaction;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    
    /**
     * Método responsável por retornar as categorias em ordem alfabética
     * @return array
     */
    public function obterCategorias()
    {
        return self::select("nm_categoria", "nm_rota")
            ->orderBy('id_categoria', 'asc')
            ->get();
    }
    
    /**
     * Método responsável por criar o relacionamento entre produto e categoria
     * @return array
     */
    public function produtos()
    {
        return $this->hasMany('laravelinaction\Produtos', 'id_categoria', 'id_categoria');
    }
}
