<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    //  Show all listings
    public function index(){
        $student_list= Student::latest()->paginate(10);
        return view('students.list',compact('student_list'));
    }

    // Show Create Form
    public function create(){
        return view('students.create');
    }

    // Store Listing Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'admission_no' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'gender' => 'required',
            'contact_no' => 'required',
            'blood_group'=> 'required'
        ]);
        if($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('student_photo', 'public');
        }

        Student::create($formFields);

        return redirect(route('home'))->with('message', 'Student data created successfully!');
    }

    // Show Edit Form
    public function edit(Student $id) {
        return view('students.edit', ['data' => $id]);
    }

     // Update Listing Data
     public function update(Request $request, Student $student_data) {
        
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'admission_no' => 'required',
            'dob' => 'required',
            'class' => 'required',
            'gender' => 'required',
            'contact_no' => 'required',
            'blood_group'=> 'required'
        ]);

        if($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('student_photo', 'public');
        }

        $student_data->update($formFields);

        return back()->with('message', 'Student data updated successfully!');
    }

    // Delete Listing
    public function destroy(Student $student_data) {
        
        if($student_data->photo && Storage::disk('public')->exists($student_data->photo)) {
            Storage::disk('public')->delete($student_data->photo);
        }
        $student_data->delete();
        return redirect('/')->with('message', 'Student data deleted successfully');
    }
}
