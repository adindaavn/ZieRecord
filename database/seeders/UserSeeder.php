<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(30)->create();

        $user = [
            [
                'id_operator' => 'Op1',
                'username' => 'mimin',
                'email' => 'mimin@gmail.com',
                'password' => bcrypt('a'),
                'hak_akses' => 'walas',
                'role' => 'guru',
                'Status' => 'Aktif',
            ],
            [
                'id_operator' => 'Op2',
                'username' => 'operator',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('a'),
                'hak_akses' => 'walas',
                'role' => 'guru',
                'Status' => 'Aktif',
            ],
            [
                'id_operator' => 'Op3',
                'username' => 'admin',
                'email' => 'owner@gmail.com',
                'password' => bcrypt('a'),
                'hak_akses' => 'walas',
                'role' => 'guru',
                'Status' => 'Aktif',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
