<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
     
        $employees = Employee::with('area.upazila.district.division')->get();

        return view('employees.index', compact('employees'));
    }

}
