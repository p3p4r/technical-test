<?php

namespace App\Http\Controllers;

use App\Models\Inspection;

class InspectionController extends Controller
{
    /**
     * List of inspections
     *
     */
    public function index()
    {
        // Check if user is valid to see the page, if contains privileges (Admin, Inspector)
        // This would be done with auth
        $inspections = Inspection::with('turbine', 'turbine.components')
        ->with('user','user')->get();
        return view('inspections', ['inspections' => $inspections]);
    }
}