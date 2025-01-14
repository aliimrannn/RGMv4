<?php

namespace App\Http\Controllers;

use App\Models\Academician;
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
        $request->validate([
            'Name' => 'required',
            'StaffID' => 'required|unique:academicians',
            'Position' => 'required',
            'Email' => 'required|email|unique:academicians',
            'College' => 'required',
            'Department' => 'required',
        ]);

        Academician::create($request->all());
        return redirect()->route('academicians.index')->with('success', 'Academician created successfully.');
    }


    public function show(Academician $academician)
    {
        return view('academicians.show', compact('academician'));
    }


    public function edit(Academician $academician)
    {
        return view('academicians.edit', compact('academician'));
    }


    public function update(Request $request, Academician $academician)
    {
        $request->validate([
            'Name' => 'required',
            'StaffID' => 'required|unique:academicians,StaffID,' . $academician->Academician_ID,
            'Position' => 'required',
            'Email' => 'required|email|unique:academicians,Email,' . $academician->Academician_ID,
            'College' => 'required',
            'Department' => 'required',
        ]);

        $academician->update($request->all());
        return redirect()->route('academicians.index')->with('success', 'Academician updated successfully.');
    }

    
    public function destroy(Academician $academician)
    {
        $academician->delete();
        return redirect()->route('academicians.index')->with('success', 'Academician deleted successfully.');
    }
}
