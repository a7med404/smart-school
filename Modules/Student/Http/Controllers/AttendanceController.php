<?php

namespace Modules\Student\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Attendance;
use Modules\Student\Transformers\AttendanceResource;
use Modules\Student\Http\Requests\CreateAttendanceRequest;
use Modules\Student\Entities\Student;
use Session;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        if($request->has('level_id')){
            $date = $request->date;
            $requestAll = array_except($request->toArray(), 'date');
            $query = Student::orderBy('id', 'desc');
            foreach ($requestAll as $key => $req) {
                if (!($req == "" || null)) {
                     $query->where($key, $req);
                }
            }
            $students = $query->orderBy('id','desc')->get();
            return view('student::students.attendances.index', ['students' => $students, 'date' => $date]);
        }


        // if($request->has('level_id')){
        //     $students = Student::where('level_id', $request->level_id)->orderBy('id','desc')->get();
        //     return view('student::students.attendances.index', ['students' => $students]);
        // }
        $students = [];//Student::all();
        return view('student::students.attendances.index', ['students' => $students]);
    }

    public function lists(){
        $attend=Attendance::all();

        return view('student::students.attendances.attendance-list',['attend' => $attend]);

    }
    public function attendDataTables()
    {
        // return "jhgf";
        return DataTables::of(Attendance::orderBy('id', 'desc')->where('status','LIKE', '2')->get())
            ->addColumn('options', function ($attend) {
                return view('student::students.colums.destroy', ['id' => $attend->id, 'routeName' => 'attendances']);
            })

            // ->editColumn('gender', function ($customer) {
            //     return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
            // })
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
              ->editColumn('student_id', function ($student) {
                    return $student->student->name;
              })

              ->editColumn('status', function ($status) {
                 return attendanceStatus() [1];
             })
            ->rawColumns(['last_login', 'student_id', 'options', 'status'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

    }


    public function listShow(Request $request)
    {
        // dd($request->all());
        if($request->has('level_id')){
            $date = $request->date;
            $requestAll = array_except($request->toArray(), 'date');
            $query = Student::orderBy('id', 'desc');
            foreach ($requestAll as $key => $req) {
                if (!($req == "" || null)) {
                    $query->where($key, $req);
                }
            }
            // $students = $query->orderBy('id','desc')->get();
            $students = $query->join('attendances')
            ->orderBy('id','desc')->get();
            dd($students);
            return view('student::students.attendances.list', ['students' => $students, 'date' => $date]);

        }


        // if($request->has('level_id')){
        //     $students = Student::where('level_id', $request->level_id)->orderBy('id','desc')->get();
        //     return view('student::students.attendances.index', ['students' => $students]);
        // }
        $students = [];//Student::all();
        dd($students);
        return view('student::students.attendances.index', ['students' => $students]);
    }


    public function attendancesSelect()
    {
        return view('student::students.attendances.select');
    }

    public function attendancesdata()
    {
        return view('student::students.student.reports.report-student-attendances');
    }
    public function attendanceData()
    {
        // return "jhgf";
        return DataTables::of(Attendance::orderBy('id', 'desc')->where('status','LIKE', '1')->get())
            ->addColumn('options', function ($attend) {
                return view('student::students.colums.fake', ['id' => $attend->id, 'routeName' => 'report-student-attendances']);
            })

            // ->editColumn('gender', function ($customer) {
            //     return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
            // })
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
              ->editColumn('student_id', function ($student) {
                    return $student->student->name;
              })

              ->editColumn('status', function ($status) {
                 return attendanceStatus() [2];
             })
            ->rawColumns(['last_login', 'student_id', 'options', 'status'])
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
    public function store(Request $request)
    {
        foreach ($request->status as $student_id => $value) {
            $data = [
                'date'          => $request->date,
                'status'        => $value,
                'student_id'    => $student_id,
            ];
            Attendance::create($data);
        }
        Session::flash('flash_massage_type');
        return redirect()->route('attendances.index')->withFlashMassage('تم اضافة الغياب و الحضور بنجاح');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $attendanceInfo = attendance::findOrFail($id);
        return view('student::students.attendances.show', ['attendanceInfo' => $attendanceInfo]);
    }
    /**
     * Show attendances in one attendance.
     * @param int $id
     * @return Response
     */
    public function attendances($id)
    {
        return new AttendanceResource(Attendance::findOrfail($id)->attendances);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $attendanceInfo = attendance::findOrFail($id);
        return view('student::students.attendances.edit', ['attendanceInfo' => $attendanceInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateAttendanceRequest $request, $id)
    {
        $attendanceUpdate = Attendance::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Attendance Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Attendance $Oneattendance)
    {
      $attendanceForDelete = $Oneattendance->findOrfail($id);
      $attendanceForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Attendance Deleted Susscefully');
    }


    public function getAttendances($attendance_id)
    {
        return new AttendanceResource(Attendance::where('attendance_id', $attendance_id)->orderBy('sort', 'asc')->get());
        // return response()->json(['message' => 'تم الحذف بنجاح'], 200);
    }
}
