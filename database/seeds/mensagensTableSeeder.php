<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       Mensagem::create([
            'title' => '1',
            'texto' => 'oioioi',
            'autor' => 'Julia'
        ]);

        Mensagem::create([
            'title' => '2',
            'texto' => 'turobom?',
            'autor' => 'Julia'
        ]);

    }
}
