<?php

namespace laravelinaction\Http\Controllers;

use laravelinaction\Produtos;
use laravelinaction\Categorias;

class ConteudoController extends Controller
{
    protected $produtos;
    protected $categorias;
    
    public function __construct(Produtos $produto, Categorias $categoria)
    {
        $this->produtos = $produto;
        $this->categorias = $categoria;
    }
    
    protected function obterDadosDaPagina()
    {
        return [
            'categorias' =>  $this->categorias->obterCategorias()
        ];
    }

    public function getIndex()
    {
        return \View::make("pages.home", $this->obterDadosDaPagina())->with("produtos", $this->produtos->obterProdutos());
    }
}
