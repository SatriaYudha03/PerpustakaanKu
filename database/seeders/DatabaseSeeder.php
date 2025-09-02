<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => $name = 'Admin',
            'username' => usernameGenerator($name),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123')
        ])->assignRole(Role::create(['name' => 'admin']));

        User::factory()->create([
            'name' => $name = 'Operator',
            'username' => usernameGenerator($name),
            'email' => 'operator@gmail.com',
            'password' => bcrypt('123123123')
        ])->assignRole(Role::create(['name' => 'operator']));

        User::factory()->create([
            'name' => $name = 'Member',
            'username' => usernameGenerator($name),
            'email' => 'member@gmail.com',
            'password' => bcrypt('123123123')
        ])->assignRole(Role::create(['name' => 'member']));
    }
}
