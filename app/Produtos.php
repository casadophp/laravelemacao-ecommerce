<?php

namespace laravelinaction;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produto';
    
    /**
     * Método responsável por retornar 4 produtos em ordem alfabética
     * @param int $total
     * @return array
     */
    public function obterProdutos($total = 4)
    {
        return self::select("nm_produto", "nm_descricao", "cd_valor", "nm_imagem")
            ->orderBy('id_produto', 'desc')
            ->take($total)
            ->get();
    }
}
