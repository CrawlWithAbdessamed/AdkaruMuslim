<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adkar;
use App\Models\User;

class AdkarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adkar::factory(20)->create();

        foreach (Adkar::all() as $adkar) {
            $users = User::inRandomOrder()->take(rand(1,20))->pluck('id');
            $adkar->users()->attach($users);
        }
    }
}
