<?php

namespace Modules\Student\Http\Controllers;
use Yajra\DataTables\DataTables;
use App\Modules\User\Entities\Role;
use Illuminate\Http\Request;
use Modules\Student\Entities\StudentStudentParent;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Department;
use Modules\Student\Entities\Level;
use Illuminate\Support\Facades\DB;
use Modules\Student\Entities\Student;
use Modules\Student\Entities\Attendance;

class StudentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {

        return view('student::students.student.reports.report-levels')
        ->with('level',Level::all())
         ->with('department',Department::all())
         ->with('student',Student::searched());
    }

    public function class()
    {
        return view('student::students.student.reports.report-data-classrooms');
    }
    public function part()
    {
        $level=request()->query('level_id');
         $class=request()->query('classroom_id');
         $gender=request()->query('gender_id');
         $part=request()->query('part_id');


        if($level)
        {
            $std=Student::where('level_id', 'LIKE',"%$level%")
             ->orWhere('classroom_id','LIKE',"%$class%")
             ->orWhere('part_id','LIKE',"%$part%")
             ->orWhere('gender','LIKE',"%$gender%")
            ->get();
        }
        else{
            $std=Student::where('level_id', 'LIKE',"%$level%")
            ->orWhere('classroom_id','LIKE', "%$class%")
             ->orWhere('part_id', 'LIKE' , "%$part%")
            ->orWhere('gender',' LIKE',  "%$gender%")
            ->get();
        }
        return view('student::students.student.reports.report-parts',compact('std'));
    }
    public function empstudent()
    {

        $emp=Student::where('is_staff_son',1)->get();
        return view('student::students.student.reports.report-emp-student',compact('emp'));
    }
    public function empstudentDataTables()
    {
        // return "jhgf";
        return DataTables::of(Student::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($student) {
                return view('student::students.colums.fake', ['id' => $student->id, 'routeName' => 'empstudentDataTable']);
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
            ->editColumn('level_id', function ($student) {
                return $student->level->name;
            })
            ->editColumn('classroom_id', function ($student) {
                return $student->classroom->name;
            })
             ->editColumn('part_id', function ($student) {
                return $student->part->name;
            })
            ->editColumn('religion', function ($religion) {
                return religion()[1];
            })
            ->rawColumns(['last_login', 'level_id', 'options', 'status', 'gender','religion'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

    }

    public function PayLevelReport()
    {
        $role=Role::all();
        return view('student::students.student.reports.PayLevel.PayLevel')
        ->with('role',Role::all());
    }
    public function transport(){
        return view('student::students.student.reports.transport-pay.transport');
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
        return view('student::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('student::edit');
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

    public function viewPage(Request $request, $report, $printpage = null)
    {
        // dd($printpage);
        $data = [];
        switch($report){
            case 'levels':
                if($request->has('filter')){
                    $requestAll = $request->toArray();
                    $query = Level::orderBy('id','desc');
                    foreach ($requestAll as $key => $req) {
                        if (!($req == "" || null)) {
                            $query->where($key, $req);
                        }
                    }
                    $data = $query->orderBy('id','desc')->get();
                }else {
                    $data = Level::all();
                }
                break;
            case 'report-emp-student':
                    $data = Student::where('is_staff_son', 1)->get();
                break;
            case 'report-student-attendances':
                if($request->has('filter')){
                    $requestAll = array_except($request->toArray(), ['from', 'to']);
                    $query = Student::orderBy('level_id');
                    foreach ($requestAll as $key => $req) {
                        if (!($req == "" || null)) {
                            $query->where($key, $req);
                        }
                    }
                    $query = $query->join('attendances', function ($join) {
                        $join->on('students.id', '=', 'attendances.student_id');
                            //  ->where('attendances.user_id', '>', 5);
                    })->select('students.*', 'attendances.*', 'attendances.note as attendances_note');

                    if (!($request->from == "" || null) && ($request->to   == "" || null)) {
                        $query = $query->where('date', '>=', $request->from);
                    }elseif (($request->from == "" || null) && !($request->to   == "" || null)) {
                        $query = $query->where('date', '<=', $request->to);
                    }elseif(!($request->from == "" || null) && !($request->to   == "" || null)){
                        $query = $query->whereBetween('date', [$request->from, $request->to]);
                    }
                    $data = $query->get();

                }else {
                    $data = Student::join('attendances', function ($join) {
                        $join->on('students.id', '=', 'attendances.student_id');
                            //  ->where('attendances.user_id', '>', 5);
                    })->select('students.*', 'attendances.*', 'attendances.note as attendances_note')
                    ->get();
                }
                break;
            case 'report-separates':
                $data = \DB::table('report_separates')->get();
                break;
            case 'report-warnings':
                $data = \DB::table('report_warnings')->get();
                break;
            case 'report-data-classrooms':
                $data = Student::where('level_id', 1)
                ->orWhere('classroom_id' , 1)
                ->orWhere('gender', 1)
                ->get();
                break;
            case 'report-school-register':
                    if($request->has('filter')){
                        $requestAll = $request->toArray();
                        $query = Student::orderBy('id', 'asc');
                        foreach ($requestAll as $key => $req) {
                            if (!($req == "" || null)) {
                                $query->where($key, $req);
                            }
                        }
                        $data = $query->orderBy('id','desc')->get();
                    }else{
                        $data = Level::all();
                    }
                    break;
            default:
            return abort(404);
        }
        if ($printpage) {
            return view("student::print.$report.print-page", ['data' => $data]);
        }else{

        }
        return view("student::students.reports.$report", ['data' => $data]);
    }

    // public function viewPage(Request $request, $report)
    // {
    //    dd($report);
    // }


}
