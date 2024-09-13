<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
        // $work_start = Attendance::first();
        // $users = User::simplePaginate(5);
        // return view('index', ['' => $]);
    }

    public function store(Request $request)
    {
        $attendance = new Attendance();
        $attendance -> user_id = auth() -> id();
        $attendance -> work_start = now();
        $attendance -> save();

        return redirect() -> back();
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance -> work_end = now();
        $attendance -> save();

        return redirect() -> back();
    }

}
