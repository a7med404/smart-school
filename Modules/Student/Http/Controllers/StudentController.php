<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Student;
use Modules\Student\Transformers\StudentResource;
use Modules\Student\Transformers\SingleStudentResource;
use Modules\Student\Http\Requests\CreateStudentRequest;
class StudentController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return StudentResource::collection(Student::all());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('student::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $id= Student::create($request->all())->id;    
        return response()->json([
                'message' => 'تم الحفظ بنجاح',
                'student_id' => $id
            ], 201);
=======
        // dd($request->all());
        $request->start_year = "2019-05-07";
        
        $data = [
            "name" => $request->name,
            "gender" => $request->gender,
            "religion" => $request->religion,
            "is_staff_son" => $request->is_staff_son,
            "birthday" => $request->birthday,
            "start_data" => $request->start_data,
            "start_year" => "2019-05-07",//$request->start_year,
            "note" => $request->note
        ];
        
        $id = Student::create(array_except($request->all(), "study_status"))->id;    
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'student_id' => $id
        ], 201);
        // if($request->has('studentIdToSend')){
        //     dd($request->all());

        // }
>>>>>>> 6c9a9ab3185d7a1fb6b3e49bf7527cb2673d845d
    }

    public function addAddress(Request $request, $id)
    {
        dd($request->all());
        $data = [
            "name" => $request->name,
            "gender" => $request->gender,
            "religion" => $request->religion,
            "is_staff_son" => $request->is_staff_son,
            "birthday" => $request->birthday,
            "start_data" => $request->start_data,
            "start_year" => "2019-05-07",//$request->start_year,
            "note" => $request->note
        ];
        // $id = Student::create($data)->id;    
        // return response()->json([
        //     'message' => 'تم الحفظ بنجاح',
        //     'student_id' => 2//$id
        // ], 201);
        if($request->has('studentIdToSend')){
            dd($request->all());

        }
    }
    
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SingleStudentResource(Student::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new SingleStudentResource(Student::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateStudentRequest $request, $id)
    {
        Student::findOrfail($id)->update($request->all());
        return response()->json([
                'message' => 'تم التحديث بنجاح',
            ], 200);
    }

    public function dist(Request $request)
    {
        dd($request->all());
        // Student::findOrfail($id)->update($request->all());
        // return response()->json([
        //         'message' => 'تم التحديث بنجاح',
        //     ], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Student::findOrfail($id)->delete();
        return response()->json([
                'message' => 'تم الحذف بنجاح',
            ], 200);
    }
    public function report_quality(){

    }
    public function report_emp_student(){

    }
    public function report_separate(){

    }
    public function report_warning(){

    }
    public function report_auth(){

    }
 
}
