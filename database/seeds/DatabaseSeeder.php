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
        if (config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        //Model::unguard(); // Laravel 5.1 

        App\User::truncate();
        $this->call(UserTableSeeder::class);
        
        App\Article::truncate();
        $this->call(ArticlesTableSeeder::class);

        //Model::reguard(); // Laravel 5.1

        if (config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }   
}
