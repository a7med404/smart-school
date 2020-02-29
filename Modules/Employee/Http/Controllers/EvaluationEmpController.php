<?php

namespace Modules\Employee\Http\Controllers;
use Yajra\DataTables\DataTables;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EvaluationEmp;
use Modules\Employee\Transformers\EvaluationEmpResource;
use Modules\Employee\Http\Requests\CreateEvaluationEmpRequest;
class EvaluationEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $evaluationEmp = EvaluationEmp::all();

        return view('employee::employees.evaluation.evaluationemp.index',['evaluationEmps' => $evaluationEmp]);
    }

    public function EmpEvalu()
    {
        // return "jhgf";
        return DataTables::of(EvaluationEmp::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($evaluation) {
                return view('employee::employees.colums.options', ['id' => $evaluation->id, 'routeName' => 'emp-evaluation.dataTable']);
            })

            ->editColumn('gender', function ($customer) {
                return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
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
            // ->editColumn('level_id', function ($student) {
            //     return $student->level->name;
            // })
            // ->editColumn('classroom_id', function ($student) {
            //     return $student->classroom->name;
            // })
            ->editColumn('employee_id', function ($student) {
                return $student->employee->full_name;
             })
            ->rawColumns(['last_login', 'employee_id', 'options', 'status', 'gender'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

    }


   public function create()
   {
       return view('employee::create');
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Response
    */
   public function store(CreateevaluationEmpRequest $request)
   {
       $evaluationemp = EvaluationEmp::create($request->all());

       if($evaluationemp){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('تم الاضافة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $evaluationEmpInfo = EvaluationEmp::findOrFail($id);
       return view('employee::.employees.evaluation.evaluationemp.show', ['evaluationEmpInfo' => $evaluationEmpInfo]);
   }
   /**
    * Show all classrooms in one evaluatioIitem .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(EvaluationEmp::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $evaluationEmpInfo = EvaluationEmp::findOrFail($id);
       return view('employee::employees.evaluation.evaluationemp.edit', ['evaluationEmpInfo' => $evaluationEmpInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateevaluationEmpRequest $request, $id)
   {
     EvaluationEmp::findOrfail($id)->update($request->all());

     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم تحديث البيانات بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, evaluationEmp $OneevaluationEmp)
   {
     $evaluationEmpForDelete = $OneevaluationEmp->findOrfail($id);
     $evaluationEmpForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
   }
}
