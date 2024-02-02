<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        $districts = DB::table('districts')->orderBy('name','ASC')->get();
        // dd($districts);
        return view('frontend.registration',compact('districts'));
    }
    public function getThana($id)
    {
        $thanas = DB::table('upazilas')->where('district_id', $id)->orderBy('name','ASC')->get();
        return response()->json($thanas);
    }

    public function Registration(Request $request){
        $customMessages = [
            'name.required' => 'Please enter your full name.',
            'name.min' => 'Your name must be at least :min characters long.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already in use.',
            'district.required' => 'Please select your district.',
            'district.exists' => 'Selected district is invalid.',
            'thana.required' => 'Please select your thana.',
            'thana.exists' => 'Selected thana is invalid.',
            'ref_code.required' => 'Please enter the reference code.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Your password must be at least :min characters long.',
            'password_confirmation.required' => 'Please confirm your password.',
            'password_confirmation.same' => 'Passwords do not match.',
            'checkbox_example_1.required' => 'You must agree to the terms and conditions.',
            'checkbox_example_1.accepted' => 'You must agree to the terms and conditions.',
        ];

        // Validate the incoming request data with custom messages
        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email|unique:users,email',
            'district' => 'required|exists:districts,id',
            'thana' => 'required|exists:upazilas,id', // Assuming there is a 'thanas' table
            // 'ref_code' => 'required|string',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|string|same:password',
            'checkbox_example_1' => 'required|accepted', // For the checkbox
        ], $customMessages);

        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'district' => $request->input('district'),
            'thana' => $request->input('thana'),
            'referral_code' => $request->input('ref_code'),
            'password' => bcrypt($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('message','Account created Scuuessfully.');


    }

    public function Login(Request $request)
{
    // Validation 
    $validation = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    // Custom messages for validation
    $customMessages = [
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'password.required' => 'Please enter your password.',
    ];

    // Validate the request
    $validatedData = $request->validate($validation, $customMessages);

    // Attempt to authenticate the user
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Authentication passed...
        return redirect()->route('frontend.dashboard');
    }

    // If authentication fails, redirect back with an error message
    return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
}

}
