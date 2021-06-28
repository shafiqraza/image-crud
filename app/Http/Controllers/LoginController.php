<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(["guest"]);
    }

    function index()
    {
        return view("auth.login");
    }

    function login(Request $request)
    {

        // dd($request->remember);
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!Auth::attempt($request->only("email", "password"), $request->remember)) {
            return back()->with('status', "Invalid credientials");
        }

        return redirect()->route('dashboard');
    }
}
