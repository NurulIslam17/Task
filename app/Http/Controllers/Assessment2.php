<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class Assessment2 extends Controller
{
    public function home()
    {
        $student =Student::get();
        return view('assesment2.api_data',[
            'students'=>$student
        ]);
    }

    //viewStudent

    //all users or single user
    public function viewStudent($id = null)
    {
        if ($id == '') {
            $student = Student::get();
            return response()->json(['student' => $student], 200);
        } else {
            $student = Student::find($id);
            return response()->json(['student' => $student], 200);
        }
    }

    // add user
    public function addStudent(Request $request)
    {

            $user               = new Student();
            $user->user_id      = $request->user_id;
            $user->name         = $request->name;
            $user->email        = $request->email;
            $user->contact      = $request->contact;
            $result = $user->save();

            $success = 'User added successfully';
            $fail = 'Bad Gateway';

            if($result) {
                return response()->json(['message' => $success], 200);
            }
            else{
                return response()->json(['message' => $fail], 502 );
            }
    }

    //deleteStudent

    public function deleteStudent($id)
    {
        $data = Student::findOrFail($id);
        $result = $data->delete();

        $success = 'Record Deleted successfully';
        $fail = 'Bad Gateway';

        if($result) {
            return response()->json(['message' => $success], 200);
        }
        else{
            return response()->json(['message' => $fail], 502 );
        }
    }

    //updateStudent
    public function updateStudent(Request $request , $id)
    {
        $data = Student::findOrFail($id);

        $data->user_id  = $request->user_id;
        $data->name     = $request->name;
        $data->email    = $request->email;
        $data->contact  = $request->contact;

        $result         = $data->save();

        $success = 'Record Updated successfully';
        $fail = 'Bad Gateway';

        if($result) {
            return response()->json(['message' => $success], 200);
        }
        else{
            return response()->json(['message' => $fail], 502 );
        }
    }



}
