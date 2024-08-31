<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
        // $users = User::simplePaginate(5);
        // return view('index', ['' => $]);
    }

    public function store(Request $request)
    {
        // Attendance::create([
        //     'work_start' => Carbon::now(),
        //     'user_id' => $user->id
        // ]);
    }
}
