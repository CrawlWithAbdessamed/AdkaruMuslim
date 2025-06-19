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

        foreach (Tasbih::all() as $tasbih) {
            $users = User::inRandomOrder()->take(rand(1,5))->pluck('id');
            foreach ($users as $userId) {
                $tasbih->users()->attach($userId, ['date' => now()]);
            }
        }
    }
}
