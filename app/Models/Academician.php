<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academician extends Model
{
    use HasFactory;

    protected $primaryKey = 'Academician_ID';

    public function researchGrants()
    {
        return $this->hasMany(ResearchGrant::class, 'Academician_ID', 'Academician_ID');
    }
}
