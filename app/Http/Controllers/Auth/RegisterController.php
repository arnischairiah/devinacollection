<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // FOR DEBUGGING
        // print_r($request->input());
        
        // INSERTING USER MANUALLY WITHOUT VALIDATION
        // $user = new User;
        // $user->name =  $request->username;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();

        $validated = $request->validate([
            // 'username', 'email', 'password' COLUMNS MUST BE EXISTS IN DATABASE AND MUST BE THE SAME WITH FORM'S INPUT NAME
            // IF DATABASE COLUMN IS username THEN FORM'S INPUT NAME MUST BE username TOO
            'username' => 'required|unique:users|min:5|max:15',
            'NISN' => 'required|unique:users|min:10|max:10',
            'kelas' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8'
        ],
        [
            // CUSTOM VALIDATION ERROR HANDLING
            "NISN.unique" => "The NISN has already been taken.",
            "NISN.min" => "The NISN must be at least 10 characters.",
            "NISN.max" => "The NISN must not be greater than 10 characters."
        ]);

        // ENCRYPT PASSWORD IN 2 WAYS
        // $validated['password'] = bcrypt($validated['password']);
        $validated['password'] = Hash::make($validated['password']);

        // SAVE DATA TO users TABLE
        User::create($validated);

        // FOR DEBUGGING ON SUCCESSFUL REGISTRATION
        // dd('Registration is successfull');

        // SHOW FLASH MESSAGE ON SUCCESSFUL REGISTRATION IN 2 WAYS
        // $request->session()->flash('success', 'Registration has done successfully, please login!');
        return redirect("/login")->with('success', 'Registration has done successfully, please login!');
    }

    public function view()
    {
        return view('auth.register');
    }
}
