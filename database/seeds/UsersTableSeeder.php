<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // informando os requisitos que serão inseridos na tabela Users para desenvolvimento
        // DB::table('users')->insert([//insere apenas um único usuario
        //     'name'      => 'Primerio Usuário',
        //     'email'     => 'email@email.com',
        //     'password'  => bcrypt('senha')
        // ]);
        // utilizando a ferramenta factory para cria varios usuários por meio da biblioteca 'Faker'.
        factory(\App\User::class,9999)->create();
    }
}
