<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentcomment extends Model
{
    use HasFactory;

    protected $fillable=['fullName', 'image', 'image1', 'comment'];
}
