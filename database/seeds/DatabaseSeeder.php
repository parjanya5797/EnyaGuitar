<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('admins')->insert([
            'name' => 'creatuDevelopers',
            'email' => 'creatudevelopers@admin.com',
            'password' => bcrypt('creatudevelopers'),
        ]);
    }
}
