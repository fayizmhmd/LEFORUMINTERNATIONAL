<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeReview extends Model
{
    use HasFactory;

    public function toggleActive()
{
    // Toggle the active status
    $this->is_active = !$this->is_active;
}
}
