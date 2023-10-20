<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = Admin::create([
            'created_at' => \Carbon\Carbon::now(),
            'username' => 'adminUsername',
             'image' => '',
             'first_name' => 'myFirstName',
             'last_name' => 'myLastName',
             'email' => 'admin@admin.com',
             'password' => bcrypt('admin123'),
             'status' => '1',
        ]);
    }
}
