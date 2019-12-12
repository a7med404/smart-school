<?php

namespace Modules\Education\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Evaluation;
use Session;
use Modules\Education\Http\Requests\CreateEvaluationRequest;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $evaluations = Evaluation::orderBy('id', 'asc')->get();
        return view('education::evaluations.index', ['evaluations' => $evaluations]);
    }
    public function EvaluationTable()
    {
        // return "jhgf";
        return DataTables::of(Evaluation::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($evaluation) {
                return view('education::colums.options', ['id' => $evaluation->id, 'routeName' => 'evaluations']);
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
            // ->editColumn('status', function ($student) {
            //     return $student->status == 0 ? '<span class="label label-light-warning">' . status()[$student->status] . '</span>' : '<span class="label label-light-success">' . status()[$student->status] . '</span>';
            // })
             ->editColumn('student_id', function ($student) {
                return $student->student->name;
            })
            ->editColumn('employee_id', function ($emp) {
                return $emp->employee->full_name;
            })
            ->editColumn('subject_id', function ($subject) {
                return $subject->subject->name;
            })
            ->rawColumns(['last_login', 'roles', 'options', 'status', 'gender'])
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
        return view('education::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    { 
        $evaluation = Evaluation::create($request->all());
        if($evaluation){
            Session::flash('flash_massage_type');
            return redirect()->route('evaluations.index')->withFlashMassage('Evaluation Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $evaluationInfo = evaluation::findOrFail($id);
        return view('education::evaluations.show', ['evaluationInfo' => $evaluationInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $evaluationInfo = evaluation::findOrFail($id);
        return view('education::evaluations.edit', ['evaluationInfo' => $evaluationInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateEvaluationRequest $request, $id)
    {
        $evaluationUpdate = Evaluation::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('evaluations.index')->withFlashMassage('Evaluation Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Evaluation $Oneevaluation)
    {
      $evaluationForDelete = $Oneevaluation->findOrfail($id);
      $evaluationForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Evaluation Deleted Susscefully');
    }     

}
