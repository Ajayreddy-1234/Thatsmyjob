<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;
class CreateUsersSeeder extends Seeder
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
               'name'=>'Admin',
               'email'=>'admin@thatsmyjob.in',
                'user_type'=>'1',
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'Recruiter',
               'email'=>'recruiter@thatsmyjob.in',
                'user_type'=>'2',
               'password'=> bcrypt('recruiter'),
            ],
            [
                'name'=>'Freelancer',
                'email'=>'freelancer@thatsmyjob.in',
                 'user_type'=>'3',
                'password'=> bcrypt('freelancer'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}


