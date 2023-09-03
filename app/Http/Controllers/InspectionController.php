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
        $inspections = Inspection::with('turbine', 'turbine.components')
        ->with('user','user')->get();
        return view('inspections', ['inspections' => $inspections]);
    }
}