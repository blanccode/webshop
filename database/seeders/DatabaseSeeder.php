<?php

namespace Database\Seeders;

use App\Models\View;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(random_int(1, 20))->create();
        View::factory(random_int(1, 20))->create();

        $this->call([
            AdminSeeder::class,
            ViewSeeder::class,
        ]);
    }
}
