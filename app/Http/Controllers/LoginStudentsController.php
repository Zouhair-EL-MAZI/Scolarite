<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class LoginStudentsController extends Controller
{
    // Display login form
    public function loginForm()
    {
        return view('layouts.login-students'); // login Blade
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string', // Either Apogee Number or CNE
            'date_of_birth' => 'required|date',
        ]);

        // Check student credentials using either Apogee Number or CNE
        $student = Student::where(function ($query) use ($request) {
            $query->where('apogee_number', $request->identifier)
                ->orWhere('cne', $request->identifier);
        })
            ->where('date_of_birth', $request->date_of_birth)
            ->first();

        if ($student) {
            // Save student id in session
            session(['student_id' => $student->id]);

            // Redirect to student dashboard or requests page
            return redirect()->route('requests.index');
        }

        // If invalid credentials
        return back()->withErrors([
            'identifier' => 'Invalid Apogee Number/CNE or date of birth.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->session()->forget('student_id'); // remove student from session
        return redirect()->route('students.login'); // redirect to login page
    }
}
