<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidaterables;

class Candidaterable_seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = "App\Models\Candidates";
        $data = [
            ["candidaterable_type"=> $model, "candidaterable_id"=>1, "recruiter_id"=>10],
            ["candidaterable_type"=> $model, "candidaterable_id"=>2, "recruiter_id"=>10],
            ["candidaterable_type"=> $model, "candidaterable_id"=>3, "recruiter_id"=>5],
            ["candidaterable_type"=> $model, "candidaterable_id"=>4, "recruiter_id"=>5],
            ["candidaterable_type"=> $model, "candidaterable_id"=>5, "recruiter_id"=>7],
            ["candidaterable_type"=> $model, "candidaterable_id"=>6, "recruiter_id"=>7],
            ["candidaterable_type"=> $model, "candidaterable_id"=>7, "recruiter_id"=>3],
            ["candidaterable_type"=> $model, "candidaterable_id"=>8, "recruiter_id"=>3],
            ["candidaterable_type"=> $model, "candidaterable_id"=>9, "recruiter_id"=>2],
            ["candidaterable_type"=> $model, "candidaterable_id"=>10, "recruiter_id"=>2],
            ["candidaterable_type"=> $model, "candidaterable_id"=>1, "recruiter_id"=>1],
            ["candidaterable_type"=> $model, "candidaterable_id"=>2, "recruiter_id"=>2],
            ["candidaterable_type"=> $model, "candidaterable_id"=>3, "recruiter_id"=>3],
            ["candidaterable_type"=> $model, "candidaterable_id"=>4, "recruiter_id"=>4],
            ["candidaterable_type"=> $model, "candidaterable_id"=>5, "recruiter_id"=>5],
            ["candidaterable_type"=> $model, "candidaterable_id"=>6, "recruiter_id"=>6],
            ["candidaterable_type"=> $model, "candidaterable_id"=>7, "recruiter_id"=>7],
            ["candidaterable_type"=> $model, "candidaterable_id"=>8, "recruiter_id"=>8],
            ["candidaterable_type"=> $model, "candidaterable_id"=>9, "recruiter_id"=>9],
            ["candidaterable_type"=> $model, "candidaterable_id"=>10, "recruiter_id"=>10],
            
        ];

        $lists = [];
        foreach($data as $list)
        {
            $list["created_at"] = date('Y-m-d H:i:s');
            $list["updated_at"] = date('Y-m-d H:i:s');
            array_push($lists, $list); 
        }


        Candidaterables::insert($lists);
    }
}
