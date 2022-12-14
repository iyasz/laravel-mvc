<?php

namespace Database\Seeders;

use App\Models\admin;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::insert([
            'name' => 'yayayayay',
            'username' => 'awdawd',
            'password' => 'arissu',
            'created_at' => Carbon::now()
        ]);
    }
}
