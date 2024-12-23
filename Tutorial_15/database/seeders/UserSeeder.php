<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'Abdelouahab tamraoui',
            'email' => 'abdel@gamil.com',
            'password' => '123456789',
        ]);
        $user1->assignRole('admin');
        $user2 = User::factory()->create([
            'name' => 'yahya boussakla',
            'email' => 'yahya@gamil.com',
            'password' => '123456789',
        ]);
        $user2->givePermissionTo('edit articles');
    }
}
