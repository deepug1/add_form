<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function submit_form(Request $request)
    {
        // Retrieve form data
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $address = $request->input('address');

        // Insert data into database
        DB::table('forms')->insert([
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
        ]);

        // Redirect back or to another page
        // return redirect()->back()->with('success', 'Form submitted successfully!');
        return response()->json(['messege', 'New entry added sucessfully']);

    }
}
