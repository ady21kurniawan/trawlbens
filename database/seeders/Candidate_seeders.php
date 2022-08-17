<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidates;

class Candidate_seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name"=>"vacant 1", "email"=>"vacant1@gmail.com", "phone"=>"6285600000001"],
            ["name"=>"vacant 2", "email"=>"vacant2@gmail.com", "phone"=>"6285600000002"],
            ["name"=>"vacant 3", "email"=>"vacant3@gmail.com", "phone"=>"6285600000003"],
            ["name"=>"vacant 4", "email"=>"vacant4@gmail.com", "phone"=>"6285600000004"],
            ["name"=>"vacant 5", "email"=>"vacant5@gmail.com", "phone"=>"6285600000005"],
            ["name"=>"vacant 6", "email"=>"vacant6@gmail.com", "phone"=>"6285600000006"],
            ["name"=>"vacant 7", "email"=>"vacant7@gmail.com", "phone"=>"6285600000007"],
            ["name"=>"vacant 8", "email"=>"vacant8@gmail.com", "phone"=>"6285600000008"],
            ["name"=>"vacant 9", "email"=>"vacant9@gmail.com", "phone"=>"6285600000009"],
            ["name"=>"vacant 10", "email"=>"vacant10@gmail.com", "phone"=>"6285600000010"]
        ];

       
        $lists = [];
        foreach($data as $list)
        {
            $list["created_at"] = date('Y-m-d H:i:s');
            $list["updated_at"] = date('Y-m-d H:i:s');
            array_push($lists, $list); 
        }
     
        Candidates::insert($lists);
    }
}
