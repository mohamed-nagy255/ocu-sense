<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function store (request $request) {
        // return $request;
        $patient = Patient::create([
            'name' => $request -> name,
            'age' => $request -> age,
            'date_birth' => $request -> date_birth,
            'my_date' => $request -> my_date,
            'phone' => $request -> phone,
            'gender' => $request -> gender,
            'diabetes' => $request -> diabetes,
            'pressure' => $request -> pressure,
            'alleragies' => $request -> alleragies,
            'medical' => $request -> medical,
        ]);
        return redirect()->back()->with('add', 'The patient has been added successfully');
    }
}
