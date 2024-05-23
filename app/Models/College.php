<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'rating',
        'image',
        'description',
        'is_active',
    ];

    public function locations(){
        return $this->belongsToMany(Location::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
    }

}
