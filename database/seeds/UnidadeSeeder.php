<?php

use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Unidade::create([
            'nome' => 'und 1',
            'rua' => 'Parcito',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.987803,
            'lng' => -37.485048
        ]);

        \App\Unidade::create([
            'nome' => 'und 2',
            'rua' => 'luiz mendes',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.987868,
            'lng' => -37.487304
        ]);

        \App\Unidade::create([
            'nome' => 'und 3',
            'rua' => 'Boa vista',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.985219,
            'lng' => -37.486392
        ]);


        \App\Unidade::create([
            'nome' => 'und 4',
            'rua' => 'Boa vista',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.985219,
            'lng' => -37.486392
        ]);


        \App\Unidade::create([
            'nome' => 'und 5',
            'rua' => 'Boa vista',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.985219,
            'lng' => -37.486392
        ]);
        \App\Unidade::create([
            'nome' => 'und 6',
            'rua' => 'Boa vista',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.985219,
            'lng' => -37.486392
        ]);

        \App\Unidade::create([
            'nome' => 'und 7',
            'rua' => 'Boa vista',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.985219,
            'lng' => -37.486392
        ]);


        \App\Unidade::create([
            'nome' => 'und 8',
            'rua' => 'Boa vista',
            'num' => '126',
            'bairro' => 'Aloisio Souto Pinto',
            'cidade' => 'garanhuns',
            'uf' => 'PE',
            'cep' => '56555-000',
            'complemento' => "casa",
            'lat' => -8.985219,
            'lng' => -37.486392
        ]);
    }
}
