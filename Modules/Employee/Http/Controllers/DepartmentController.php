<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Department;
use Modules\Employee\Transformers\DepartmentResource;
use Modules\Employee\Http\Requests\CreateDepartmentRequest;
class DepartmentController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return  DepartmentResource::collection(Department::all());
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
    public function store(CreateDepartmentRequest $request)
    {
        $id =  Department::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'Department_id' => $id
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new DepartmentResource(Department::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new DepartmentResource(Department::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateDepartmentRequest $request, $id)
    {
        Department::findOrfail($id)->update($request->all());
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
        Department::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }
}
