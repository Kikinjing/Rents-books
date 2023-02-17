<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\SchemaState;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        DB::table('users')->insert([
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make ('12345'),
            'phone' => '08561276261',
            'address' => 'Sukabumi',
            'role_id' => 1
        ],
        [
            'name' => 'aleza',
            'email' => 'aleza@gmail.com',
            'password' => Hash::make('aleza27'),
            'phone' => '08561276261',
            'address' => 'Sukabumi',
            'role_id' => 2
        ],
        ]);
       
    }
}
