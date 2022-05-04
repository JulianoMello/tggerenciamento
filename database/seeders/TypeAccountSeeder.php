<?php

namespace Database\Seeders;

use App\Models\TypeAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeAccountSeeder extends Seeder
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
                'name' => 'Conta Corrente',
                'description' => 'Conta do tipo corrente'
            ],
            [
                'id' => 2,
                'name' => 'Conta Poupança',
                'description' => 'Conta do tipo poupança'
            ],
            [
                'id' => 3,
                'name' => 'Dinhero',
                'description' => 'Dinheiro na carteira física'
            ]
        ];
        foreach($datas as $data){
            TypeAccount::updateOrCreate([
                'id' => $data['id'],
                'name' => $data['name'],
                'description' => $data['description']
            ]);
        }
    }
}
