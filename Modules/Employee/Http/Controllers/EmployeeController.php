<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Employee;
use Modules\Employee\Transformers\EmployeeResource;
use Modules\Employee\Http\Requests\CreateEmployeeRequest;
use Hash;
use Session;
use Modules\Employee\Http\Requests\CreateAuthEmployeeRequest;

class EmployeeController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    { 
        
        if($request->has('gender')){
            $requestAll = $request->toArray();
            $query = Employee::orderBy('id', 'desc');
            foreach ($requestAll as $key => $req) {
                if (!($req == "" || null)) {
                    $query->where($key, $req);
                }
            }
            $employees = $query->orderBy('id','desc')->get();
            return view('employee::employees.employee.index', ['employees' => $employees]);
        }

        $employees = Employee::all();
        return view('employee::employees.employee.index', ['employees' => $employees]);
    }



    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('employee::employees.employee.create');
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function addEmployeeManual()
    {
        return view('employee::employees.employee.add-employee-manual');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        // dd($request->all());
        $request['password'] = Hash::make($request->password);
        $employee = Employee::create($request->all());
        if($employee){
            Session::flash('flash_massage_type');
            return redirect()->route('employees.index')->withFlashMassage('Employee Created Susscefully');
        }
    }
    
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $employeeInfo = Employee::findOrFail($id);
        return view('employee::employees.employee.show', ['employeeInfo' => $employeeInfo]);
        return new SingleEmployeeResource(Employee::findOrfail($id));
        /* return view('employee::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $employeeInfo = Employee::findOrFail($id);
        return view('employee::employees.employee.edit', ['employeeInfo' => $employeeInfo]);
        
        return Employee::with('addresses')->with('contacts')->with('identifcations')->with('health')->findOrfail($id);
        /* return view('employee::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateEmployeeRequest $request, $id)
    {
        $updateEmployee = Employee::findOrfail($id)->update($request->all());
        if($updateEmployee){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('Employee Updated Susscefully');
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Employee::findOrfail($id)->delete();
        return redirect()->back()->withFlashMassage('Employee Deleted Susscefully');
    }

    public function Trashedestroy(Request $request)
    {
        Employee::findOrfail($request->employee_id)->delete();
        return redirect()->back()->withFlashMassage('Employee Deleted Susscefully');
    }


    public function employeeOnlyTrashed(Request $request)
    {
        $employeeTrashed = Employee::onlyTrashed()->get();
        return view('employee::employees.employee.trashed-employees.index', ['employeeTrashed' => $employeeTrashed]);
    }


    public function restoreEmployee(Request $request, $id)
    {
        Employee::where('id', $id)->restore();
        return redirect()->back()->withFlashMassage('Employee restore Susscefully');
    }
    
    public function showEditAuthForm($id)
    {
        $studentParentInfo = Employee::findOrFail($id);
        return view('student::students.student-parents.edit-auth', ['studentParentInfo' => $studentParentInfo]);
    }
    
    public function saveEditAuth(CreateAuthEmployeeRequest $request, $id)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        $studentParentUpdate = Employee::findOrfail($id)->update($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Employee Updated Susscefully');
    }


    
}
