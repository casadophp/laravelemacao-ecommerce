<?php

namespace laravelinaction\Http\Controllers;

use laravelinaction\Produtos;

class ConteudoController extends Controller
{
    protected $produtos;
    
    public function __construct(Produtos $produto)
    {
        $this->produtos = $produto;
    }
    
    public function getIndex()
    {
        return View("conteudo.home", ["produtos" => $this->produtos->obterProdutos()]);
    }
}
