<?php

namespace App\Http\Controllers;

use App\Models\Academician;
use App\Models\ResearchGrant;
use Illuminate\Http\Request;

class AcademicianController extends Controller
{
    public function index()
    {
        $academicians = Academician::all();
        return view('academicians.index', compact('academicians'));
    }


    public function create()
    {
        return view('academicians.create');
    }


    public function store(Request $request)
    {
        //validate incoming request data
        $request->validate([
            'Name' => 'required',
            'StaffID' => 'required|unique:academicians',
            'Position' => 'required',
            'Email' => 'required|email|unique:academicians',
            'College' => 'required',
            'Department' => 'required',
        ]);

        // Store data
        Academician::create([
            'Name' => $request->Name,
            'StaffID' => $request->StaffID,
            'Position' => $request->Position,
            'Email' => $request->Email,
            'College' => $request->College,
            'Department' => $request->Department,
        ]);

        return redirect()->route('academicians.index')->with('success', 'Academician created successfully.');
    }


    public function show(Academician $academician)
    {
        //for project leader
        $researchGrant = ResearchGrant::where('Academician_ID', $academician->Academician_ID)->get();

        //for members
        $memberGrants = ResearchGrant::whereHas('members', function ($query) use ($academician) {
            // Specify the table name to resolve the ambiguity
            $query->where('academician_research_grant.Academician_ID', $academician->Academician_ID);
        })->get();

        return view('academicians.show', compact('academician', 'researchGrant', 'memberGrants'));
    }


    public function edit(Academician $academician)
    {
        return view('academicians.edit', compact('academician'));
    }


    public function update(Request $request, Academician $academician)
    {
        // Validate the request data for update
        $request->validate([
            'Name' => 'required',
            'StaffID' => 'required',
            'Position' => 'required',
            'Email' => 'required',
            'College' => 'required',
            'Department' => 'required',
        ]);

        // Update the academician record with validated data
        $academician->update($request->all());

        return redirect()->route('academicians.index')->with('success', 'Academician updated successfully.');
    }


    public function destroy(Academician $academician)
    {
        $academician->delete();
        return redirect()->route('academicians.index')->with('success', 'Academician deleted successfully.');
    }
}
