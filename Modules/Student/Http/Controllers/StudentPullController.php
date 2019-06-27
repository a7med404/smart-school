<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\StudentPull;
use Modules\Student\Transformers\StudentPullResource;
use Modules\Student\Http\Requests\CreateStudentPullRequest;
class StudentPullController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return StudentPullResource::collection(StudentPull::all());
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
    public function store(CreateStudentPullRequest $request)
    {
         $id= StudentPull::create($request->all())->id;    
        return response()->json([
                'message' => 'تم الحفظ بنجاح',
                'StudentPull_id' => $id
            ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new StudentPullResource(StudentPull::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new StudentPullResource(StudentPull::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateStudentPullRequest $request, $id)
    {
        StudentPull::findOrfail($id)->update($request->all());
        return response()->json([
                'message' => 'تم التحديث بنجاح',
            ], 200);
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        StudentPull::findOrfail($id)->delete();
        return response()->json([
                'message' => 'تم الحذف بنجاح',
            ], 200);
    }
 
}
