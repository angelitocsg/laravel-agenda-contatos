<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Opção 1
        DB::table('contatos')->insert([
           'saudacao' => 'Sr.',
           'nome' => 'Angelito Casagrande',
           'telefone' => '(15) 99111-1020',
           'data_nascimento' => '2018/05/19',
           'email' => 'angelito@angelito.com.br',
           'nota' => 'Usuário criado usando Seeder com método DB.',
           'created_at' => date('Y-m-d H:i:s')
        ]);

        // Opção 2
        factory(App\Contato::class, 20)->create();
    }
}
