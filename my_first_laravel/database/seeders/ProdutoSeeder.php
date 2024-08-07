<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
/* Chama a biblioteca Faker para me possibilitar gerar diversos valores nas minhas tabelas */
use Faker\Factory as Faker;


//Seeder me possibilita popular o meu banco, gerando diversos dados com exemplo
class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $faker = Faker::create();

        // Gerar 50 produtos
        for ($i = 1; $i <= 50; $i++) {
            Produto::create([
                'nome' => 'Produto ' . $i,
                'descricao' => $faker->sentence,
                'preco' => $faker->randomFloat(2, 1, 1000),
                'quantidade' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
