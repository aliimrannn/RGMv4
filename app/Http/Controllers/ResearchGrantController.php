<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\Academician;
use Illuminate\Http\Request;

class ResearchGrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $researchGrants = ResearchGrant::with('academician')->get();
        return view('research-grants.index', compact('researchGrants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $academicians = Academician::all();
        return view('research-grants.create', compact('academicians'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(ResearchGrant $researchGrant)
    {
        return view('research-grants.show', compact('researchGrant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResearchGrant $researchGrant)
    {
        $academicians = Academician::all();
        return view('research-grants.edit', compact('researchGrant', 'academicians'));
    }

    /**
     * Update the specified resource in storage.
     */
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
        ]);

        $researchGrant->update($request->all());
        return redirect()->route('research-grants.index')->with('success', 'Research grant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResearchGrant $researchGrant)
    {
        $researchGrant->delete();
        return redirect()->route('research-grants.index')->with('success', 'Research grant deleted successfully.');
    }
}
