<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResearchGrant extends Model
{
    use HasFactory;

    protected $primaryKey = 'Grant_ID';

    protected $fillable = [
        'ProjectTitle',
        'GrantAmount',
        'GrantProvider',
        'StartDate',
        'DurationMonth',
        'EndDate',
        'Academician_ID',
    ];

    public function academician()
    {
        return $this->belongsTo(Academician::class, 'Academician_ID', 'Academician_ID');
    }

    public function milestones()
    {
        return $this->hasMany(Milestone::class, 'Grant_ID', 'Grant_ID');
    }

    public function members()
    {
        return $this->belongsToMany(Academician::class, 'academician_research_grant', 'Grant_ID', 'Academician_ID');
    }

}
