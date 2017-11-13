<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          UsersSeeder::class,
          //ProductSeeder::class,
          OrderSeeder::class,
          CategoriesSeeder::class
      ]);
    }
}
