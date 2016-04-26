@extends('layouts.master')
@section('content')
<div class="content">
    <div class="content_top">
        <div class="heading">
            <h3>Novos produtos</h3>
        </div>
        <div class="see">
            <p><a href="#">{{trans('portal.allproducts')}}</a></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section group">
        @foreach ($produtos as $produto)
        <div class="grid_1_of_4 images_1_of_4">
            <a href="{{ URL::to("/produto/$produto->nm_produto") }}">
                {{ Html::image("midia/images/produtos/$produto->nm_imagem", 'Laravel In Action') }}
            </a>
            <h2>{{$produto->nm_produto}}</h2>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">R$ {{formataNumero($produto->cd_valor)}}</span></p>
                </div>
                <div class="add-cart">								
                    <h4><a href="{{ URL::to("/produto/$produto->nm_produto") }}">Comprar</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="content_bottom">
        <div class="heading">
            <h3>Feature Products</h3>
        </div>
        <div class="see">
            <p><a href="#">{{trans('portal.allproducts')}}</a></p>
        </div>
        <div class="clear"></div>
    </div>
</div>
@stop