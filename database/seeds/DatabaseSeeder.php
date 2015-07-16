<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Eloquent::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('ArticlesTableSeeder');

        // Model::reguard();
    }
}




class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
            Article::create([
                'title' => $faker->sentence,
                'content' => implode('', $faker->sentences(4))
                ]);
        }
    }
}