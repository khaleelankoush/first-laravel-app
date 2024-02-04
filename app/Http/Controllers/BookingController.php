<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function myBookings(Request $request)
    {
        return 'My Bookings';
        // return 'my bookings';
    }

    function login()
    {
        return '<h1>Login Page</h1>';
    }

    function sayHello($n)
    {
        // return view('welcomeName')->with('requestedName', $n);


        return 'welcome, you are authenticated';
        // $isAuthenticated = true;

        // if ($n == "Tarmeez") {
        //     $isAuthenticated = true;
        // } else {
        //     $isAuthenticated = false;
        // }

        // if ($isAuthenticated) {
        //     return response()->json(['data' => ['name' => $n]]);
        // } else {
        //     return back();
        // }
    }

    function sayWelcome($n)
    {
        // return view('welcomeName')->with('requestedName', $n);

        $isAuthenticated = true;

        if ($n == "Tarmeez") {
            $isAuthenticated = true;
        } else {
            $isAuthenticated = false;
        }

        if ($isAuthenticated) {
            return response()->json(['data' => ['name' => $n]]);
        } else {
            return response()->json(['error' => 'Not Authenticated'], 401);
        }
    }
}
