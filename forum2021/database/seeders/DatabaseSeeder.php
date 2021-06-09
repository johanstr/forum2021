<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create();
        \App\Models\Thread::factory(20)->create();
        \App\Models\Topic::factory(50)->create();
        \App\Models\Reply::factory(200)->create();
    }
}
