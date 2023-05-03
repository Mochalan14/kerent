<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $users = [
            [
                'name' => 'Maulana', 'role_id' => 2, 'email' => 'maulana@kerent.com',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Admin', 'role_id' => 1, 'email' => 'admin@kerent.com',
                'password' => bcrypt('12345678')
            ],
        ];

        User::insert($users);
    }
}
