<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidaterables extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ["candidaterable_type", "candidaterable_id", "recruiter_id"];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
