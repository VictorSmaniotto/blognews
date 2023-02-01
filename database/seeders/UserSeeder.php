<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pt_BR');

        User::create([
            'nome' => 'Victor Smaniotto',
            'email' => 'victor@teste.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'created_at' => now(),
        ]);

        foreach (range(1, 20) as $index) {
            User::create([
                'nome' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('12345678'),
                'role' => 'editor',
                'created_at' => now(),
            ]);
        }
    }
}
