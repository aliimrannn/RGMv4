<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academician extends Model
{
    use HasFactory;

    protected $primaryKey = 'Academician_ID';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table = 'academicians';

    protected $fillable = [
        'Name', 
        'StaffID', 
        'Position', 
        'Email', 
        'College', 
        'Department',
    ];

    public function researchGrants()
    {
        return $this->belongsToMany(ResearchGrant::class, 'academician_research_grant', 'Academician_ID', 'Grant_ID');
    }
}
