<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PFRSChecklistItem;

class PFRSChecklistController extends Controller
{
    public function index()
    {
        // Retrieve all checklist items from the database
        $checklistItems = PFRSChecklistItem::all();

        return view('checklist', compact('checklistItems'));
    }

    public function submit(Request $request)
    {
        // Validate the submitted data
        $request->validate([
            'department' => 'required', // Department field is required
            'notes' => 'nullable|string', // Notes field is optional and must be a string
            'status' => 'required', // Status field is required
        ]);

        // Create a new checklist item instance
        $checklistItem = new PFRSChecklistItem();
        $checklistItem->department = $request->department;
        $checklistItem->notes = $request->notes;
        $checklistItem->status = $request->status;
        $checklistItem->save();

        // Redirect back to the checklist route with success message
        return redirect()->route('pfrs.checklist.index')->with('success', 'PFRS Standards Checklist submitted successfully.');
    }
}
