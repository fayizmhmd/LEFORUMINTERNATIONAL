<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'is_active',
    ];

    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
    }
}
