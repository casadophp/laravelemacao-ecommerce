<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=4; $i++) {
            DB::table('produto')->insert([
                'nm_produto' => "Produto - $i",
                'nm_imagem' => "produto$i.png",
                'nm_descricao' => "O produto - $i é uma ótima escolha para você",
                'cd_valor' => 50.00 * $i,
            ]);
        }
        
    }
}
