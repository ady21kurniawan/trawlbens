<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;
   
    protected $fillable = ["name", "email", "phone"];
    protected $appends = ['recruiter'];

    public function candidaterable()
    {
        return $this->morphMany('App\Models\Candidaterables', 'candidaterable');
    }

    public function getRecruiterAttribute()
    {
        $data =  $this->morphMany('App\Models\Candidaterables', 'candidaterable');
        $recruiter = $data->first() ?? null;
        if($recruiter)
        {
           return \App\Models\Recruiters::find($recruiter->recruiter_id); 
        }
        return;

    }
}
