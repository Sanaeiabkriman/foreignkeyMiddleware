<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'nom'=>'Super Admin',
                'slug'=>'super_admin'
            ],

            [
                'nom'=>'Admin',
                'slug'=>'admin'
            ],

            [
                'nom'=>'Membre',
                'slug'=>'membre'
            ]
        ]);
    }
}
