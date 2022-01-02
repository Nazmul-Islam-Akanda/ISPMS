<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'Admin',
                'contact_no'=>'01683674237',
                'email'=>'admin@gmail.com',
                'user_id'=>'admin@gmail.com',
                'role'=>'Admin',
                'password'=>bcrypt('admin'),
                'image'=>'',
            ]
            );
    }
}
