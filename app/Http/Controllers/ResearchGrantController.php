<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\Academician;
use Illuminate\Http\Request;

class ResearchGrantController extends Controller
{
    public function index()
    {
        $researchGrants = ResearchGrant::with('academician')->get();
        return view('research-grants.index', compact('researchGrants'));
    }


    public function create()
    {
        $academicians = Academician::all();
        return view('research-grants.create', compact('academicians'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ProjectTitle' => 'required|string|max:255',
            'GrantAmount' => 'required|integer',
            'GrantProvider' => 'required|string|max:255',
            'StartDate' => 'required|date',
            'DurationMonth' => 'required|integer',
            'EndDate' => 'required|date',
            'Academician_ID' => 'required|exists:academicians,Academician_ID',
        ]);

        // Store data
        $researchGrant = ResearchGrant::create($validatedData);

        return redirect()->route('research-grants.index')->with('success', 'Research grant created successfully.');
    }


    public function show(ResearchGrant $researchGrant)
    {
        return view('research-grants.show', compact('researchGrant'));
    }


    public function edit(ResearchGrant $researchGrant)
    {
        $academicians = Academician::all();
        return view('research-grants.edit', compact('researchGrant', 'academicians'));
    }


    public function update(Request $request, ResearchGrant $researchGrant)
    {
        $request->validate([
            'ProjectTitle' => 'required',
            'GrantAmount' => 'required|integer',
            'GrantProvider' => 'required',
            'StartDate' => 'required|date',
            'DurationMonth' => 'required|integer',
            'EndDate' => 'required|date',
            'Academician_ID' => 'required|exists:academicians,Academician_ID',
            'members' => 'array', // Validate that members is an array
            'members.*' => 'exists:academicians,Academician_ID', // Validate each ID exists
        ]);

        $researchGrant->update($request->all());

        $researchGrant->members()->sync($request->members);
        
        return redirect()->route('research-grants.index')->with('success', 'Research grant updated successfully.');
    }


    public function destroy(ResearchGrant $researchGrant)
    {
        $researchGrant->delete();
        return redirect()->route('research-grants.index')->with('success', 'Research grant deleted successfully.');
    }
}
