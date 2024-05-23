<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'           =>   'ULTRA',
            'description'    =>   'test description',
            'benefits'       =>   '["test1", "test2", "test3"]',
            'plan_type'      =>   'INSURANCE',
            'duration'       =>   '360',
        ]);
        Plan::create([
            'name'           =>   'PREMIUM',
            'description'    =>   'test description',
            'benefits'       =>   '["test1", "test2", "test3"]',
            'plan_type'      =>   'HEALTH CARE',
            'duration'       =>   '360',
        ]);
        Plan::create([
            'name'           =>   'BASIC',
            'description'    =>   'test description',
            'benefits'       =>   '["test1", "test2", "test3"]',
            'plan_type'      =>   'INSURANCE',
            'duration'       =>   '360',
        ]);
    }
}
