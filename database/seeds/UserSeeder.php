<?php

use App\RoleCode;
use App\User;
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
        $faker = Faker\Factory::create();

        $data = [
            [
                'name' => 'Admin BPJS',
                'email' => 'admin.bpjs@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::BPJS_ADMIN,
            ],
            [
                'name' => 'Admin Satker',
                'email' => 'admin.satker@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SATKER_ADMIN,
            ]
        ];

        User::insert($data);
    }
}
