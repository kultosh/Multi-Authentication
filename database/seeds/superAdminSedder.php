<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class superAdminSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('superadmin'),
        ]);
    }
}
