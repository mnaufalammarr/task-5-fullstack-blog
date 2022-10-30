<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::create([
            'name' => 'Naufal',
            'username' => 'naufal',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Ammar',
            'username' => 'ammar',
            'email' => 'ammar@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Rizqi',
            'username' => 'rizqi',
            'email' => 'rizqi@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
