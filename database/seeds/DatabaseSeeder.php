<?php

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
//         $this->call(UsersTableSeeder::class);

//        $this->call([
//            UsersTableSeeder::class,
//            PostsTableSeeder::class,
//            CommentsTableSeeder::class,
//        ]);

        //Users
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Super Manager',
            'email' => 'manager@mail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Super Cashier',
            'email' => 'cashier@mail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'id' => '4',
            'name' => 'Super User',
            'email' => 'user@mail.com',
            'password' => bcrypt('password'),
        ]);

        //Others

        DB::table('admins')->insert([
            'user_id' => '1',
            'email' => 'admin@mail.com',
        ]);

        DB::table('managers')->insert([
            'nic' => '21',
            'user_id' => '2',
            'email' => 'manager@mail.com',
            'full_name' => 'Super Manager',
            'address' => '33',
            'contact_no' => '12',
        ]);

        DB::table('cashiers')->insert([
            'nic' => '34',
            'user_id' => '3',
            'email' => 'cashier@mail.com',
            'full_name' => 'Super Cashier',
            'address' => '33',
            'contact_no' => '12',
        ]);



    }
}
