<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"sanae",
            "email"=>"sanae@mail.com",
            "password"=>bcrypt("sanaesanae"),
            "role_id"=>"1",
        ]);
    }
}
