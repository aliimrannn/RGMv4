<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\Academician;
use App\Models\Milestone;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        $grantCount = ResearchGrant::count();
        $academicianCount = Academician::count();
        $milestoneCount = Milestone::count();

        return view('home', compact('grantCount', 'academicianCount', 'milestoneCount'));
    }
}
