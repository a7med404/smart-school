<?php

namespace Modules\Employee\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpAbsence;
use Modules\Employee\Entities\Employee;
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
        $emp=Employee::all();
        return view('employee::employees.EmpAbsence.index',compact('empabsences'))
        ->with('emp', $emp)
        ;
    }


    public function empdataTable()
    {
        // return "jhgf";
        return DataTables::of(EmpAbsence::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($EmpAbsence) {
                return view('employee::employees.colums.options', ['id' => $EmpAbsence->id, 'routeName' => 'emp-absences']);
            // })

            // ->editColumn('gender', function ($customer) {
            //     return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
            })
            // ->addColumn('last_login', function (student $student) {
            //     if($student->last_login != null) {
            //         return \Carbon\Carbon::parse($student->last_login)->diffForhumans();
            //     }
            //     return $student->last_login;
            // })

            // ->addColumn('roles', function ($student) {
            //     // $data = [];
            //     // foreach ($student->roles as $role) {
            //         return view('student::students.colums.role', ['roles' => $student->roles]);
            //         // $data[] = '<span class="label label-light-info">'.$role->display_name.'</span>';
            //     // }
            //     // return $data;
            // })
             ->editColumn('employee_id', function ($employee) {
                 return $employee->employee->full_name;
             })
            ->rawColumns(['last_login', 'roles', 'options', 'status', 'employee_id'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

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
            'employee_id' => '2',
            'absence_from' => $request->absence_from,
            'absence_to'   => $request->absence_to,
            'absence_reason'=> $request->absence_reason
        ]);
        if($emp){
            Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم  الاضافة بنجاح');
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
      return redirect()->route('emp-absences.index')->withFlashMassage('تم تحديث البيانات بنجاح');
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
      return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
    }
    }
}
