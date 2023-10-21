<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Henry',
                'image' => '',
                'first_name' => 'Opara',
                'last_name' => 'Oluchi',
                'role' => 'admin',
                'email' => 'ganeshkhadka46@gmail.com',
                'password' => bcrypt('admin123'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'Abuja',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'sales',
                'city' => 'Abuja',
                'age' => '23',
            ]);
            User::create(
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'gunner',
                'image' => '',
                'first_name' => 'gunner',
                'last_name' => 'kc',
                'role' => 'employee',
                'email' => 'gunnerpat46@gmail.com',
                'password' => bcrypt('employee123'),
                'status' => '1',
                'phone' => '986133131',
                'address' => 'Lagos',
                'gender' => 'male',
                'dob' => '2019-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'IT',
                'city' => 'Lagos',
                'age' => '22',
            ]);

        //     [
        //         'created_at' => \Carbon\Carbon::now(),
        //         'username' => 'nabin',
        //         'image' => '',
        //         'first_name' => 'nbn',
        //         'last_name' => 'bhandari',
        //         'role' => 'admin',
        //         'email' => 'nabin@gmail.com',
        //         'password' => bcrypt('admin123'),
        //         'status' => '1',
        //         'phone' => '9866454562',
        //         'address' => 'butwal',
        //         'gender' => 'male',
        //         'dob' => '2019-03-12',
        //         'join_date' => '2019-03-12',
        //         'job_type' => 'Developer',
        //         'city' => 'butwal',
        //         'age' => '21',
        //     ],

        //     [
        //         'created_at' => \Carbon\Carbon::now(),
        //         'username' => 'abcd',
        //         'image' => '',
        //         'first_name' => 'xyz',
        //         'last_name' => 'pqr',
        //         'role' => 'employee',
        //         'email' => 'employee1@gmail.com',
        //         'password' => bcrypt('employee123'),
        //         'status' => '1',
        //         'phone' => '9866567794',
        //         'address' => 'butwal',
        //         'gender' => 'male',
        //         'dob' => '2019-03-12',
        //         'join_date' => '2019-03-12',
        //         'job_type' => 'Developer',
        //         'city' => 'butwal',
        //         'age' => '25',
        //     ],

        //     [
        //         'created_at' => \Carbon\Carbon::now(),
        //         'username' => 'bishal',
        //         'image' => '',
        //         'first_name' => 'bishal',
        //         'last_name' => 'gc',
        //         'role' => 'employee',
        //         'email' => 'bishal@gmail.com',
        //         'password' => bcrypt('employee123'),
        //         'status' => '1',
        //         'phone' => '9866567794',
        //         'address' => 'butwal',
        //         'gender' => 'male',
        //         'dob' => '2019-03-12',
        //         'join_date' => '2019-03-12',
        //         'job_type' => 'designer',
        //         'city' => 'butwal',
        //         'age' => '25',
        //     ],
        // ]);

    }
}
