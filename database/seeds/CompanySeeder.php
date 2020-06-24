<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{

    public function run()
    {
        factory(Company::class, 10)->create();
    }
}
