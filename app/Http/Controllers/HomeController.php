<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $date = date('y,m,d');
        $patients = Patient::where('my_date', $date) -> get();
        return view('welcome', compact('patients'));
    }

    public function pat () {
        $patients = Patient::all();
        return view('patients', compact('patients'));
    }

    public function show (int $id) {
        $patient = Patient::find($id) -> first();
        return view('patient', compact('patient'));
    }
}
