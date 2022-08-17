<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recruiters;


class Recruiter_seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name"=>"recruiter A", "email"=>"recruiter_a@gmail.com", "phone"=>"6285600000091"],
            ["name"=>"recruiter B", "email"=>"recruiter_b@gmail.com", "phone"=>"6285600000092"],
            ["name"=>"recruiter C", "email"=>"recruiter_c@gmail.com", "phone"=>"6285600000093"],
            ["name"=>"recruiter D", "email"=>"recruiter_d@gmail.com", "phone"=>"6285600000094"],
            ["name"=>"recruiter E", "email"=>"recruiter_e@gmail.com", "phone"=>"6285600000095"],
            ["name"=>"recruiter F", "email"=>"recruiter_f@gmail.com", "phone"=>"6285600000096"],
            ["name"=>"recruiter G", "email"=>"recruiter_g@gmail.com", "phone"=>"6285600000097"],
            ["name"=>"recruiter H", "email"=>"recruiter_h@gmail.com", "phone"=>"6285600000098"],
            ["name"=>"recruiter I", "email"=>"recruiter_i@gmail.com", "phone"=>"6285600000099"],
            ["name"=>"recruiter J", "email"=>"recruiter_j@gmail.com", "phone"=>"6285600000100"]
        ];

        $lists = [];
        foreach($data as $list)
        {
            $list["created_at"] = date('Y-m-d H:i:s');
            $list["updated_at"] = date('Y-m-d H:i:s');
            array_push($lists, $list); 
        }

        Recruiters::insert($lists);
    }
}
