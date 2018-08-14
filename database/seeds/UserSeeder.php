<?php

use App\RoleCode;
use App\User;
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
        $faker = Faker\Factory::create();

        $data = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SUPER_ADMIN,
                'api_token' => '0'
            ],
            [
                'name' => 'Super Admin 1',
                'email' => 'superadmin1@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SUPER_ADMIN,
                'api_token' => '0'
            ],
            [
                'name' => 'Super Admin 2',
                'email' => 'superadmin2@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SUPER_ADMIN,
                'api_token' => '0'
            ],
            [
                'name' => 'Super Admin 4',
                'email' => 'superadmin4@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SUPER_ADMIN,
                'api_token' => '0'
            ],
            [
                'name' => 'Super Admin 5',
                'email' => 'superadmin5@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SUPER_ADMIN,
                'api_token' => '0'
            ],
            [
                'name' => 'Admin BPJS',
                'email' => 'admin.bpjs@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::BPJS_ADMIN,
                'api_token' => '0'
            ],
            [
                'name' => 'Admin Satker',
                'email' => 'admin.satker@mail.com',
                'password' => bcrypt('rahasia'),
                'role'     => RoleCode::SATKER_ADMIN,
                'api_token' => '0'
            ]
        ];

        DB::table('users')->truncate();
        User::insert($data);
    }
}
