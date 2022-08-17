<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Candidate_seeders::class,
            Recruiter_seeders::class,
            Candidaterable_seeders::class
        ]);
    }
}
