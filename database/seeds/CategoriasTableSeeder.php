<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
        	[
        		'descripcion' => 'Futbol',
        	],
        	[
        		'descripcion' => 'E-sports',
        	],
        	[
        		'descripcion' => 'Voleibol',
        	],
        	[
        		'descripcion' => 'Basquetbol',
        	],
        ]);
    }
}
