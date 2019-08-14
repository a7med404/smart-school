<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\CutAllowance;
use Modules\Employee\Transformers\CutAllowanceResource;
use Modules\Employee\Http\Requests\CreateCutAllowanceRequest;
use Session;
class CutAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $cuts=CutAllowance::all();
        return view('employee::employees.cut-allowance.index',compact('cuts'));
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
        $cut =  CutAllowance::create([

        'name' => $request->name
        ]);
        return redirect()->route('cut-allowances.index')->withFlashMassage('Empoloyee Absence Added Susscefully');

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
        $cuts=CutAllowance::findOrfail($id);
        /* return view('student::edit'); */
return view('employee::employees.cut-allowance.edit',compact('cuts'));

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
        Session::flash('flash_massage_type');

        return redirect()->route('cut-allowances.index')->withFlashMassage('updated Susscefully');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $emp=CutAllowance::findOrfail($id);
        $emp->delete();
        if($emp){
            Session::flash('flash_massage_type');   
            return redirect()->back()->withFlashMassage('Deleted Susscefully');
        }
    }

    public function report(Request $request){

        return  CutAllowanceResource::collection(CutAllowance::where('employee_id',$request->employee_id)->where('date','>=',$request->from)->where('date','<=',$request->to)->get());
    }
}
