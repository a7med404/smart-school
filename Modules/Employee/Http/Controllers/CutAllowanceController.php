<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\CutAllowance;
use Modules\Employee\Transformers\CutAllowanceResource;
use Modules\Employee\Http\Requests\CreateCutAllowanceRequest;
class CutAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return  CutAllowanceResource::collection(CutAllowance::all());
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
    public function store(CreateCutAllowanceRequest $request)
    {
        $id =  CutAllowance::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'CutAllowance_id' => $id
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new CutAllowanceResource(CutAllowance::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new CutAllowanceResource(CutAllowance::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateCutAllowanceRequest $request, $id)
    {
        CutAllowance::findOrfail($id)->update($request->all());
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
        CutAllowance::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }

    public function report(Request $request){
        
        return  CutAllowanceResource::collection(CutAllowance::where('employee_id',$request->employee_id)->where('date','>=',$request->from)->where('date','<=',$request->to)->get());
    }
}
