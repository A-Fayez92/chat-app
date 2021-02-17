<?php

namespace Database\Seeders;

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
        User::factory()->create(
            [
                'email' => 'AAA@AAA.com',
                'name' => 'AAAAAA'
            ]
        );
        User::factory()->create(
            [
                'email' => 'BBB@BBB.com',
                'name' => 'BBBBBB'
            ]
        );
        User::factory()->create(
            [
                'email' => 'MMM@MMM.com',
                'name' => 'MMMMMM'
            ]
        );
    }
}
