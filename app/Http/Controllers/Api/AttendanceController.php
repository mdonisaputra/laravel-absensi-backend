<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    //check in
    public function checkin(Request $request)
    {
        //validate lat and long
        $request->validate([
	    'latitude' => 'required',
	    'longitude' => 'required',
    ]);
    

    //save new attendance
    $attendance = New Attendance;
    $attendance->user_id = $request->user()->id;
    $attendance->date = date('Y-m-d');
    $attendance->time_in = date('H:i:s');
    $attendance->latlon_in = $request->latitude . ',' . $request->longitude;
    $attendance->save();

    return response([
        'message' => 'Checkin Success',
        'attendance' => $attendance
    ], 200);
    }
}
