<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solicitacoes')->insert([  // 1
            'campanha_idade_publico_id' => 1,
            'paciente_cns' => '111111111111111',
            'status' => 'Em espera',
        ]);

        DB::table('solicitacoes')->insert([  // 1
            'campanha_idade_publico_id' => 2,
            'paciente_cns' => '111111111111111',
            'agente_id' => 1,
            'status' => 'vacinado',
            'data_time' => new DateTime('now'),
        ]);

        DB::table('solicitacoes')->insert([  // 1
            'campanha_idade_publico_id' => 2,
            'paciente_cns' => '222222222222222',
            'agente_id' => 1,
            'status' => 'recusado',
            'recusa_desc' => 'foi recusado por está...',
            'data_time' => new DateTime('now'),
        ]);

        DB::table('solicitacoes')->insert([  // 1
            'campanha_idade_publico_id' => 2,
            'paciente_cns' => '333333333333333',
            'agente_id' => 1,
            'status' => 'Em espera',
            'data_time' => new DateTime('now'),
        ]);
    }
}
