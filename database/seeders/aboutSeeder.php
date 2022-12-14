<?php

namespace Database\Seeders;

use App\Models\about;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        about::insert([
            'name' => 'elaina',
            'alamat' => 'kahuripan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
