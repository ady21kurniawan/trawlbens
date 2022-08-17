<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiters extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ["name", "email", "phone"];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
