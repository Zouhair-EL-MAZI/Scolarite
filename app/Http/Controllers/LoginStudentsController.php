<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginStudentsController extends Controller
{
    public function showLoginForm()
    {
        return view('loginStudents.index');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'login_id' => ['required', 'string', 'regex:/^[A-Za-z0-9]+$/'],
            'dob' => 'required|date',
        ], [
            'login_id.required' => 'Apogee number or CNE is required',
            'login_id.regex' => 'The Apogee number or CNE must contain only letters and numbers',
            'dob.required' => 'The date of birth is required',
            'dob.date' => 'The date of birth must be a valid date',
        ]);

        $loginId = trim($validated['login_id']);
        $dob = trim($validated['dob']);

        $student = Student::where(function ($query) use ($loginId) {
                $query->where('apogee_number', $loginId)
                      ->orWhere('cne', $loginId);
            })
            ->whereDate('date_of_birth', $dob)
            ->first();

        if ($student) {
            Auth::guard('student')->login($student);
            return redirect()->route('requests.index');
        }

        return back()
            ->withErrors(['login_id' => 'Invalid credentials'])
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.student.show');
    }
}
