<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // get all the data
    public function index() {
        // echo "studentController::index";
        $data = Student::get();
        // return $data;
        return view("student-list", compact("data"));
    }
    // add the hoe
    public function add (){
        // echo"from sc";
        return view("add-student");
    }
    // add the save
    public function save (Request $request ){
        dd($request->all());
        // adding the new date
        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;
        // $adress = $request->adress;

        // $stu = new Student();
        // $stu->name = $name;
        // $stu->email = $email;
        // $stu->phone = $phone;
        // $stu->adress = $adress;
        // $stu->save();
        // if ($stu->hasErrors()) {
        //     $errors = $stu->errors();
        //     // Log or dump the error messages for debugging
        //     echo $errors;
        // }
        // code from the chess app
        
                // Validate the incoming request data
                $validatedData = $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'adress' => 'required',
                ]);
        
                // Create a new studnt record in the database
                $stue = Student::factory()->create([
                    'name' => $validatedData['name'],
                    'email' => $validatedData['email'],
                    'phone' => $validatedData['phone'],
                    'adress' => $validatedData['adress'],
                ]);
        
    }
}
