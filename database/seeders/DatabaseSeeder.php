<?php

namespace Database\Seeders;

use App\Models\usuario;
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
        // \App\Models\User::factory(10)->create();
        usuario::factory(50)->create();

    }
}
?>