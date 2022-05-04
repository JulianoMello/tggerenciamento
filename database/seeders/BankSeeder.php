<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSeeder extends Seeder
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
                'code_bank' => '001',
                'name' => 'Banco do Brasil S.A.',
                'abreviation' => 'BCO DO BRASIL S.A.'
            ],
            [
                'id' => 2,
                'code_bank' => '003',
                'name' => 'BANCO DA AMAZONIA S.A.',
                'abreviation' => 'BCO DA AMAZONIA S.A.'
            ],
            [
                'id' => 3,
                'code_bank' => '004',
                'name' => 'Banco do Nordeste do Brasil S.A.',
                'abreviation' => 'BCO DO NORDESTE DO BRASIL S.A.'
            ],
            [
                'id' => 4,
                'code_bank' => '007',
                'name' => 'BANCO NACIONAL DE DESENVOLVIMENTO ECONOMICO',
                'abreviation' => 'BNDES'
            ],
            [
                'id' => 5,
                'code_bank' => '010',
                'name' => 'CREDICOAMO CREDITO RURAL COOPERATIVA',
                'abreviation' => 'CREDICOAMO'
            ],
            [
                'id' => 6,
                'code_bank' => '011',
                'name' => 'CREDIT SUISSE HEDGING-GRIFFO CORRETORA DE VALORE',
                'abreviation' => 'C.SUISSE HEDGING-GRIFFO CV S/A'
            ],
            [
                'id' => 7,
                'code_bank' => '012',
                'name' => ' Banco Inbursa S.A.',
                'abreviation' => 'BANCO INBURSA'
            ],
            [
                'id' => 8,
                'code_bank' => '014',
                'name' => ' STATE STREET BRASIL S.A. - BANCO COMERCIAL',
                'abreviation' => 'STATE STREET BR S.A. BCO COMERCIAL'
            ],
            [
                'id' => 9,
                'code_bank' => '015',
                'name' => ' UBS Brasil Corretora de Câmbio, Títulos e Valores Mobiliá',
                'abreviation' => 'UBS BRASIL CCTVM S.A.'
            ],
            [
                'id' => 10,
                'code_bank' => '016',
                'name' => ' COOPERATIVA DE CRÉDITO MÚTUO DOS DESPACHANTES DE TRÂNSITO DE SANTA CATARINA E RIO GRANDE DO SUL',
                'abreviation' => 'CCM DESP TRÂNS SC E RS'
            ]
        ];
        foreach($datas as $data){
            Bank::updateOrCreate([
                'id' => $data['id'],
                'code_bank' => $data['code_bank'],
                'name' => $data['name'],
                'abreviation' => $data['abreviation']
            ]);
        }
    }
}
