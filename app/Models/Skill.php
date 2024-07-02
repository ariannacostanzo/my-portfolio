<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_path'];

    public function printImage()
    {
        return asset('public/images/skills/' . $this->image_path);
    }
}
