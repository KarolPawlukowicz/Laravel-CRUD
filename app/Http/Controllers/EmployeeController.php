<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'experience' => 'required',
            'salary' => 'required',
        ]);

        Employee::create([
            'name' => request('name'),
            'email' => request('email'),
            'experience' => request('experience'),
            'salary' => request('salary')
        ]);

        return redirect('/employees');
    }

    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'experience' => 'required',
            'salary' => 'required',
        ]);

        $employee->update([
            'name' => request('name'),
            'email' => request('email'),
            'experience' => request('experience'),
            'salary' => request('salary'),
        ]);

        return redirect('/employees');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees');
    }
}