<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpAbsence;
use Modules\Employee\Transformers\EmpAbsenceResource;
use Modules\Employee\Http\Requests\CreateEmpAbsenceRequest;
class EmpAbsenceController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return  EmpAbsenceResource::collection(EmpAbsence::all());
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
    public function store(CreateEmpAbsenceRequest $request)
    {
        $id =  EmpAbsence::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'EmpAbsence_id' => $id
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new EmpAbsenceResource(EmpAbsence::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new EmpAbsenceResource(EmpAbsence::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateEmpAbsenceRequest $request, $id)
    {
        EmpAbsence::findOrfail($id)->update($request->all());
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
        EmpAbsence::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }
}
