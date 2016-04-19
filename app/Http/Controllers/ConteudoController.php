<?php

namespace laravelinaction\Http\Controllers;

use Illuminate\Http\Request;

use laravelinaction\Http\Requests;

class ConteudoController extends Controller
{
    public function getIndex()
    {
        return View("conteudo.home");
    }
}
