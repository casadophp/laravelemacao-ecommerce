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
            'nm_categoria' => "Eletrônicos",
            'nm_rota' => "eletronicos",
        ]);
    }
}
