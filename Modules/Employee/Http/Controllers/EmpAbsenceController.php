<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpAbsence;
use Modules\Employee\Transformers\EmpAbsenceResource;
use Modules\Employee\Http\Requests\CreateEmpAbsenceRequest;
use Session;
class EmpAbsenceController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $empabsences=EmpAbsence::all();
        return view('employee::employees.EmpAbsence.index',compact('empabsences'));
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
        $emp=EmpAbsence::create([
            'empolyee_id' => '2',
            'absence_from' => $request->absence_from,
            'absence_to'   => $request->absence_to,
            'absence_reason'=> $request->absence_reason
        ]);
        if($emp){
            Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Empoloyee Absence Created Susscefully');
    }
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
        $empabsence=EmpAbsence::find($id);
        return view('employee::employees.EmpAbsence.edit',compact('empabsence'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateEmpAbsenceRequest $request, $id)
    {
       $emp= EmpAbsence::findOrfail($id)->update($request->all());
        if($emp){
            Session::flash('flash_massage_type');
      return redirect()->route('emp-absences.index')->withFlashMassage('Empoloyee Absence Deleted Susscefully');
    }

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {

$emp= EmpAbsence::findOrfail($id)->delete();

        if($emp){
            Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Empoloyee Absence Deleted Susscefully');
    }
    }
}
