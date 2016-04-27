<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
          ['nm_categoria' => "Eletrônicos",'nm_rota' => "eletronicos",],
          ['nm_categoria' => "Eletrodomésticos",'nm_rota' => "eletrodomesticos",],
          ['nm_categoria' => "Informática",'nm_rota' => "informatica",],
          ['nm_categoria' => "Telefonia",'nm_rota' => "telefonia",],
        ]);
    }
}
