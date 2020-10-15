<?php

use Illuminate\Database\Seeder;

class OpcoesArte extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $op = OpcoesArte::firstOrCreate([
            [
                'name' => 'Enviar arquivo pronto para impressão',
            ],
            [
                'value' => 0,
                'status' => 1,
            ]
        ]);
        $op = OpcoesArte::firstOrCreate([
            [
                'name' => 'Enviar arquivo pronto para impressão com verificação técnica em 2 horas úteis',
            ],
            [
                'value' => 2.5,
                'status' => 1,
            ]
        ]);
        $op = OpcoesArte::firstOrCreate([
            [
                'name' => 'Enviar arquivo para verificação técnica e ajuste para impressão',
            ],
            [
                'value' => 15,
                'status' => 1,
            ]
        ]);
        $op = OpcoesArte::firstOrCreate([
            [
                'name' => 'Criar arte com editor online',
            ],
            [
                'value' => 0,
                'status' => 0,
            ]
        ]);
        $op = OpcoesArte::firstOrCreate([
            [
                'name' => 'Produto sem envio de arte',
            ],
            [
                'value' => 0,
                'status' => 1,
            ]
        ]);
    }
}
