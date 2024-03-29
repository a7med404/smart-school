<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Salary;
use Modules\Employee\Transformers\SalaryResource;
use Modules\Employee\Http\Requests\CreateSalaryRequest;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return  view('employee::employees.salary.salary-details.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateSalaryRequest $request)
    {
        Salary::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SalaryResource(Salary::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new SalaryResource(Salary::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateSalaryRequest $request, $id)
    {
        Salary::findOrfail($id)->update($request->all());
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
        Salary::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }


    public function salaryDetails()
    {
        return  view('employee::employees.salary.salary-details.index');


    }


    public function reallianceSalary()
    {
        return view('student::create');
    }

    public function overpayment()
    {
        return view('student::create');
    }

    public function overpaymentPivision()
    {
        return view('student::create');
    }
}
