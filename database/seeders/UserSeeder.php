<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'abdul@gmail.com',
            'username' => 'Abdul',
            'password' => bcrypt('12345'),
            'photo' => "img1.pnj"
        ]);
    }
}
