<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'designation', 'image', 'facebook', 'twitter', 'linkedin', 'instagram', 'youtube'];

    // Define any other relationships or methods if needed
}
