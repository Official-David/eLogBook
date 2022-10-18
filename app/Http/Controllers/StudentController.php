<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function profile($id)
    {
        $student = User::findOrFail($id);
        return view('students.profile', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = User::findOrFail($id);
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->phone_number = $request->input('phone_number');
        $student->email = $request->input('email');
        $student->school = $request->input('school');
        $student->matriculation_number = $request->input('matriculation_number');
        $student->year_of_study = $request->input('year_of_study');
        $student->company_name = $request->input('company_name');
        $student->supervisors_name = $request->input('supervisors_name');
        $student->bank_name = $request->input('bank_name');
        $student->bank_account_number = $request->input('bank_account_number'); 
        $student->update();
        return back();
    }
}
