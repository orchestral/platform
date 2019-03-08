<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * List of seeders.
     *
     * @var array
     */
    protected $seeders = [
        // UsersTableSeeder::class,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
