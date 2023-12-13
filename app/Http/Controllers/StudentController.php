<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Existing index method...

    public function index()
{
    // Fetch all students from the database
    $students = \App\Models\Student::all();

    // Return the 'students.index' view, passing the students data to it
    return view('students.index', compact('students'));
}


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->first_name = $request->input('first_name'); // Assuming column name is first_name
        $student->last_name = $request->input('last_name');   // Assuming column name is last_name
        $student->email = $request->input('email');           // Assuming column name is email
        $student->address = $request->input('address');       // Assuming column name is address
        $student->course = $request->input('course');         // Assuming column name is course
        $student->phone = $request->input('phone');             // Assuming column name is year
        $student->registered_at = now();                      // Assuming column name is registered_at
        $student->save();


        return redirect('/students');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students');
    }

    // Other methods...
}

