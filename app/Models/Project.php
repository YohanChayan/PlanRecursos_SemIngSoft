<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manager',
        'id_chief',
        'totalSurveys',
        'surveysDone',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
