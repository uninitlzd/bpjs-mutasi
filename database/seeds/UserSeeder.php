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
            ],
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

        DB::table('users')->truncate();
        User::insert($data);
    }
}
