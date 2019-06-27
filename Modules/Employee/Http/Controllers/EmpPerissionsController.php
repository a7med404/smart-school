<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpPerissions;
use Modules\Employee\Transformers\EmpPerissionsResource;
use Modules\Employee\Http\Requests\CreateEmpPerissionsRequest;
class EmpPerissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return  EmpPerissionsResource::collection(EmpPerissions::all());
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
    public function store(CreateEmpPerissionsRequest $request)
    {
        $id =  EmpPerissions::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'EmpPerissions_id' => $id
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new EmpPerissionsResource(EmpPerissions::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new EmpPerissionsResource(EmpPerissions::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateEmpPerissionsRequest $request, $id)
    {
        EmpPerissions::findOrfail($id)->update($request->all());
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
        EmpPerissions::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }

    public function report(Request $request){
        
        return  EmpPerissionsResource::collection(EmpPerissions::where('employee_id',$request->employee_id)->where('date','>=',$request->from)->where('date','<=',$request->to)->get());
    }
}
