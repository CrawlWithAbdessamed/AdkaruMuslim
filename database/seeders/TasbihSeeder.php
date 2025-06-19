<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tasbih;
use App\Models\User;

class TasbihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tasbih::factory(5)->create();

        foreach (Tasbih::all() as $tasbih) {  // this line iterate on all the 20 tasbih created
            $users = User::inRandomOrder()->take(rand(1,5))->pluck('id');  // here we get a random number of users ID (e.g 3 user_id)
            foreach ($users as $userId) {
                $tasbih->users()->attach($userId, ['date' => now()]);   // attach the current tasbih with those 3 users ID in pivot table
            }
        }
    }
}
