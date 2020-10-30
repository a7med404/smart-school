<?php

namespace Modules\Employee\Http\Controllers;

use Modules\Employee\Entities\EmpAbsence;
use Modules\Employee\Entities\Employee;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class EmployeeReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('employee::employees');
    }
    public function Permission()
    {
        $emp=Employee::all();
        return view('employee::employees.reports.ReportPermission.ReportPermission')
        ->with('emp',Employee::all());

    }
public function progenitor(){
    return view('employee::employees.reports.ReportProgenitor.ReportProgenitor');


}

    public function Punition()
    {
        $emp=Employee::all();
        return view('employee::employees.reports.ReportRewardsPunition.ReportRewardsPunition')
        ->with('emp',Employee::all());

    }
    public function employesearch()
    {

        $search=request()->query('full_name');
        if($search){
        $employees=Employee::where('full_name', 'LIKE' ,"%{$search}%")->get();
        }
        else{
            $employees=Employee::where('full_name', 'LIKE' ,"%{$search}%")->get();

        }

        return view('employee::employees.reports.ReportSearch.ReportSearch')
        ->with('emp',Employee::all())
        ->with('employees',$employees)

        ;


    }
    public function salary()
    {
        $search=request()->query('full_name');
        if($search){
        $employees=Employee::where('full_name', 'LIKE' ,"%{$search}%")->get();
        }
        else{
            $employees=Employee::where('full_name', 'LIKE' ,"%{$search}%")->get();

        }
        return view('employee::employees.reports.ReportSalary.ReportSalary')
        ->with('emp',Employee::all())
        ->with('employees',$employees)
        ;
    }
    public function ReportAbsence()
    {
        $search=request()->query('employee_id');
        if($search){
        $employees=EmpAbsence::where('employee_id', 'LIKE' ,"%{$search}%")->get();
        }
        else{
            $employees=EmpAbsence::all();

        }
        return view('employee::employees.reports.ReportAbsence.ReportAbsence')
        ->with('employees',$employees);

    }

    public function evaluation()
    {
        return view('employee::employees.reports.ReportEvaluation.ReportEvaluation');

    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('employee::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('employee::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('employee::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function viewPage(Request $request, $report)
    {
       dd($report);
    }
}
