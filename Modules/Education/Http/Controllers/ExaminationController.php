<?php

namespace Modules\Education\Http\Controllers;
use \DB;
use Illuminate\Support\Facades\Input;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Examination;
use Modules\Education\Http\Requests\CreateExaminationRequest;
use Illuminate\Support\Facades\Session;
use Modules\Education\Entities\Mark;
use Modules\Student\Entities\Level;
use Modules\Student\Entities\Student;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        $search=request()->level_id;
        $part=Level::all();
        $se=Level::where('level',$search);

        $students =Student::orderBy('id', 'asc')->get();
        return view('education::examinations.index', ['students' => $students])
        ->with('part',$part)
        ->with('se',$se)
        ;
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
             ->editColumn('type', function ($type) {
                return examinationType()[111];
            })
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
        $examination=Examination::orderBy('id', 'desc')->get();

        return view('education::examinations.list',compact('examination'));
    }
    public function get()

    {
        $get=Student::where('level','LIKE','"%{$level}%"')
        ->orWhere('level','LIKE','"%{$lev}%"');
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'ratio' => 'required|array'
        ]);
        // $data=$request->all();
        foreach($request->input('ratio') as $key=>$value){
         $type=$request->input('type');
         $student_id=$request->input('student_id') [$key];
         $employee_id=$request->input('employee_id');
         $subject_id=$request->input('subject_id');
         $part_id=$request->input('part_id');

        $examination=Examination::insert(
    [
        'type' => $type,
        'ratio' => $value,
        'student_id' => $student_id,
        'subject_id' => $subject_id,
        'part_id' => $part_id,
        'employee_id' => $employee_id
    ]
        );
        }
        //

        //     for($i=0;$i<count($data); $i++)
        //     {

        //         $examination=Examination::create($request->all());
        //     }
        //  }

        if($examination){
            Session::flash('flash_massage_type');
            return redirect()->route('examinations.create')->withFlashMassage('Examination Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $examinationInfo = Examination::findOrFail($id);
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
