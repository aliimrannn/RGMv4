<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $primaryKey = 'Milestone_ID';

    protected $fillable = [
        'Name',
        'TargetCompletionDate',
        'Status',
        'StartDate',
        'Remarks',
        'Deliverable',
        'Grant_ID',
    ];

    public function researchGrant()
    {
        return $this->belongsTo(ResearchGrant::class, 'Grant_ID', 'Grant_ID');
    }
}
