<?php

namespace Modules\Education\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Examination;
use Session;
use Modules\Education\Http\Requests\CreateExaminationRequest;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $examinations = Examination::orderBy('id', 'asc')->get();
        return view('education::examinations.index', ['examinations' => $examinations]);
    }
 
    public function Examtable()
    {
        // return "jhgf";
        return DataTables::of(Examination::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($exam) {
                return view('education::colums.options', ['id' => $exam->id, 'routeName' => 'examinations']);
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
             ->editColumn('part_id', function ($part) {
                return $part->part->name;
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
        $examination = Examination::create($request->all());
        if($examination){
            Session::flash('flash_massage_type');
            return redirect()->route('examinations.index')->withFlashMassage('Examination Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $examinationInfo = examination::findOrFail($id);
        return view('education::examinations.show', ['examinationInfo' => $examinationInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $examinationInfo = examination::findOrFail($id);
        return view('education::examinations.edit', ['examinationInfo' => $examinationInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateExaminationRequest $request, $id)
    {
        $examinationUpdate = Examination::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('examinations.index')->withFlashMassage('Examination Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Examination $Oneexamination)
    {
      $examinationForDelete = $Oneexamination->findOrfail($id);
      $examinationForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Examination Deleted Susscefully');
    }     

}
