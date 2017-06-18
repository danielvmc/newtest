<?php

use App\Domain;
use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::truncate();

        Domain::create([
            'name' => 'contentkeoview.info',
        ]);
    }
}
