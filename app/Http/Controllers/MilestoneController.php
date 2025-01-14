<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\ResearchGrant;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    public function index()
    {
        $milestones = Milestone::with('researchGrant')->get();
        return view('milestones.index', compact('milestones'));
    }


    public function create()
    {
        $researchGrants = ResearchGrant::all();
        return view('milestones.create', compact('researchGrants'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required|string',
            'TargetCompletionDate' => 'required|date',
            'Status' => 'required|string',
            'Remarks' => 'nullable|string',
            'Deliverable' => 'nullable|string',
            'Grant_ID' => 'required|exists:research_grants,Grant_ID', 
        ]);
    
        // Store data
        $milestone = Milestone::create($validatedData);
    
        return redirect()->route('milestones.index')->with('success', 'Milestone added successfully');
    }


    public function show(Milestone $milestone)
    {
        return view('milestones.show', compact('milestone'));
    }


    public function edit(Milestone $milestone)
    {
        $researchGrants = ResearchGrant::all();
        return view('milestones.edit', compact('milestone', 'researchGrants'));
    }


    public function update(Request $request, Milestone $milestone)
    {
        $request->validate([
            'Name' => 'required',
            'TargetCompletionDate' => 'required|date',
            'Status' => 'required',
            'Remarks' => 'nullable',
            'Deliverable' => 'required',
            'Grant_ID' => 'required|exists:research_grants,Grant_ID',
        ]);

        $milestone->update($request->all());
        return redirect()->route('milestones.index')->with('success', 'Milestone updated successfully.');
    }


    public function destroy(Milestone $milestone)
    {
        $milestone->delete();
        return redirect()->route('milestones.index')->with('success', 'Milestone deleted successfully.');
    }
}
