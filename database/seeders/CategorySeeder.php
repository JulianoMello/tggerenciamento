<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'id' => 1,
                'nome' => 'Mercado',
                'tipo' => 'saida'
            ],
            [
                'id' => 2,
                'nome' => 'Academia',
                'tipo' => 'saida'
            ],
            [
                'id' => 3,
                'nome' => 'Salário',
                'tipo' => 'entrada'
            ]
        ];
        foreach($datas as $data){
            Category::updateOrCreate([
                'id' => $data['id'],
                'nome' => $data['nome'],
                'tipo' => $data['tipo']
            ]);
        }
    }
}
