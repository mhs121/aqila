<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@aqlcourse.com',
                'is_admin' => '1',
                'password' => bcrypt('aqila12'),
            ],
            [
                'name' => 'user',
                'email' => 'student@aqlcourse.com',
                'is_admin' => '2',
                'password' => bcrypt('aqila12'),
            ]
            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
