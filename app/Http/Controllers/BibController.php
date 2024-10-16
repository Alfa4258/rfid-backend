<?php

namespace App\Http\Controllers;

use App\Models\Bib;
use Illuminate\Http\Request;

class BibController extends Controller
{
    // List all BIB records
    public function index()
    {
        return Bib::all();
    }

    // Get a single BIB record by ID
    public function show($bib_number)
    {
        $bib = Bib::where('bib_number', $bib_number)->first();

        if (!$bib) {
            return response()->json(['error' => 'BIB Number not found'], 404);
        }

        return response()->json($bib);
    }

    // Create a new BIB record
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bib_number' => 'required|string|unique:bib,bib_number',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string|in:male,female,other',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email|unique:bib,email',
            'cellphone' => 'required|string',
            'category' => 'required|string',
        ]);

        return Bib::create($validated);
    }

    // Update a BIB record
    public function update(Request $request, $id)
    {
        $bib = Bib::findOrFail($id);

        $validated = $request->validate([
            'bib_number' => 'required|string|unique:bib,bib_number,' . $id,
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'gender' => 'required|string|in:male,female,other',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'country' => 'required|string',
            'email' => 'required|email|unique:bib,email,' . $id,
            'cellphone' => 'required|string',
            'category' => 'required|string',
        ]);

        $bib->update($validated);
        return $bib;
    }

    // Delete a BIB record
    public function destroy($id)
    {
        $bib = Bib::findOrFail($id);
        $bib->delete();

        return response()->json(['message' => 'Bib entry deleted successfully']);
    }
}
