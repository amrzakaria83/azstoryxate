<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Religion;
use App\Models\Country;
use App\Models\Zone;
use App\Models\Region;
use App\Models\City;
use App\Models\Department;
use App\Models\PaymentType;
use App\Models\ShiftTime;
use App\Models\Setting;
use App\Models\Employee;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Setting::factory(1)->create();
        Employee::factory(3)->create();
    }
}
