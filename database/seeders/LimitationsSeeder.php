<?php

namespace Database\Seeders;

use App\Models\Limitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LimitationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Limitation::create(['limitacion'=> 'motriz']);
        Limitation::create(['limitacion'=> 'auditiva']);
        Limitation::create(['limitacion'=> 'visual']);
        Limitation::create(['limitacion'=> 'intelectual']);
        Limitation::create(['limitacion'=> 'no aplica']);
    }
}
