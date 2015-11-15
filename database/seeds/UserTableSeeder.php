<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Toni',
            'email' => 'toni@gmail.com',
            'password' => bcrypt('tonitoni'),
        ]);

        DB::table('users')->insert([
            'name' => 'Adri',
            'email' => 'adri@gmail.com',
            'password' => bcrypt('adriadri'),
        ]);

        DB::table('users')->insert([
            'name' => 'Isma',
            'email' => 'isma@gmail.com',
            'password' => bcrypt('ismaisma'),
        ]);
    }
}
