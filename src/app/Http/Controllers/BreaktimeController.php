<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Breaktime;

class BreaktimeController extends Controller
{
    public function store(Request $request)
    {
        $breaktime = Breaktime::create([
            'user_id' => Auth::id(),
            'break_start' => now(),
        ]);

        return response()->json($breaktime);
    }

    public function update(Request $request)
    {
        $breaktime = Breaktime::where('user_id',Auth::id())
            ->whereNull('break_end')
            ->latest()
            ->first();

            if($breaktime){
                $breaktime->update(['break_end'=>now()]);
                return response()->json($breaktime);
            }

            return response()->json(['message' => 'No break in record found'], 404);
    }
}
