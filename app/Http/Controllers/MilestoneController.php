<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\ResearchGrant;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $milestones = Milestone::with('researchGrant')->get();
        return view('milestones.index', compact('milestones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $researchGrants = ResearchGrant::all();
        return view('milestones.create', compact('researchGrants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'TargetCompletionDate' => 'required|date',
            'Status' => 'required',
            'Remarks' => 'nullable',
            'Deliverable' => 'required',
            'Grant_ID' => 'required|exists:research_grants,Grant_ID',
        ]);

        Milestone::create($request->all());
        return redirect()->route('milestones.index')->with('success', 'Milestone created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Milestone $milestone)
    {
        return view('milestones.show', compact('milestone'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Milestone $milestone)
    {
        $researchGrants = ResearchGrant::all();
        return view('milestones.edit', compact('milestone', 'researchGrants'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milestone $milestone)
    {
        $milestone->delete();
        return redirect()->route('milestones.index')->with('success', 'Milestone deleted successfully.');
    }
}
