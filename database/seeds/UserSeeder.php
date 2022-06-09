<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $users = [
            [
                'id' => 1,
                'username' => 'Jhon Doe',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
                't_user' => '2',
                'referral_code' => 'xPSTUVS'

            ],
            [
                'id' => 2,
                'username' => 'Test 1',
                'email' => 'test@gmail.com',
                'password' => bcrypt('123456789'),
                't_user' => '1',
                'referral_code' => 'XPSTUV2'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
