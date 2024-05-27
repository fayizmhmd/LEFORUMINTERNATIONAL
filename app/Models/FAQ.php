<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    protected $fillable = ['college_id', 'question', 'answer'];

    public function college()
    {
        return $this->belongsTo(College::class);
    }

}
