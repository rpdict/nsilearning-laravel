<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UserTableSeeder::class);
        Model::unguard();
        $this->call('PostTableSeeder');
    }
}
class PostTableSeeder extends Seeder
{
    public function run()
    {
        Demo\Post::truncate();
        factory(Demo\Post::class, 20)->create();
    }
}
