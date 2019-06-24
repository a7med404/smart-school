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
        $id= Student::create($request->all())->id;    
        return response()->json([
                'message' => 'تم الحفظ بنجاح',
                'student_id' => $id
            ], 201);
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
