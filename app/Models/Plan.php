<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function toggleActive()
    {
        $this->is_active = !$this->is_active;
        return $this;
    }

    public function getAllBenefitsAttribute(){
       return json_decode($this->benefits, true);
    }

    protected $appends = ['all_benefits'];
}
