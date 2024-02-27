<?php

use App\barang;
use App\peminta;
use App\User;
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
        // $this->call(UserSeeder::class);

        // mock 10 data peminta
        factory(peminta::class, 10)->create();

        // mock 10 data user
        factory(User::class, 10)->create();

        // mock 10 data barang
        factory(barang::class, 10)->create();
    }
}
