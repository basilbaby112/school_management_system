<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index($id){
        $student_details=Student::find($id);
        $attendance_datas = Attendance::where('student_id', $id)->latest()->paginate(10);
        // print_r($attendance_datas); exit;
        return view('attendance.list', ['data' => $student_details,'attendance_datas' => $attendance_datas]);
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'attendance_created' => 'required',
            'attendance_status' => 'required',
        ]);

        $student_id=$request->input('student_id');
        $attendance_date=$request->input('attendance_created');
        $existingData = Attendance::where('student_id', $student_id)
                             ->where('attendance_created', $attendance_date)
                             ->first();
        
        if ($existingData){

            return redirect(route('attendance',['id' => $student_id]))->with('message', 'Attendance already added');

        }else{

            $formFields['student_id'] = $student_id;
            Attendance::create($formFields);
            return redirect(route('attendance',['id' => $student_id]))->with('message', 'Attendance added successfully!');

        }
    }
}
