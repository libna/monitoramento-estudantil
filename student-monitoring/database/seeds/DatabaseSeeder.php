<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FormulariosSeeder::class);
        $this->call(TipoDePerguntasSeeder::class);
        $this->call(PerguntasSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
