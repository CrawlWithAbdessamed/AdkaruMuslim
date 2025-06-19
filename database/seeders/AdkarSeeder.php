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

        foreach (Adkar::all() as $adkar) {  // this line iterate on all the 20 adkar created
            $users = User::inRandomOrder()->take(rand(1,20))->pluck('id');  // here we get a random number of users ID (e.g 3 user_id)
            foreach ($users as $userId) {
                $adkar->users()->attach($userId, ['date' => now()]);  // attach the current dikr with those 3 users ID in pivot table
            }
        }
    }
    
}
