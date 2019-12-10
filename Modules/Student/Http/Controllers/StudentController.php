<?php

namespace Modules\Student\Http\Controllers;

use \DB;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Student;
use Modules\Student\Transformers\StudentResource;
use Modules\Student\Transformers\SingleStudentResource;
use Modules\Student\Http\Requests\CreateStudentRequest;
use Session;
use Modules\Finance\Entities\Operation;
use Modules\Finance\Entities\PayRuls;
use Modules\Finance\Entities\PayClass;
use Modules\Student\Entities\StudentParent;
// use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('student::students.student.index');
    }
    public function indexOld(Request $request)
    {

        if($request->has('gender')){
            $requestAll = $request->toArray();
            $query = Student::orderBy('id', 'desc');
            foreach ($requestAll as $key => $req) {
                if (!($req == "" || null)) { 
                    $query->where($key, $req);
                }
            }
            $students = $query->orderBy('id','desc')->get();
            return view('student::students.student.index', ['students' => $students]);
        }

        $students = Student::all();
        return view('student::students.student.index', ['students' => $students]);
    }


    public function studentDataTables()
    {
        // return "jhgf";
        return DataTables::of(Student::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($student) {
                return view('student::students.colums.options', ['id' => $student->id, 'routeName' => 'students']);
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
            ->rawColumns(['last_login', 'level_id', 'options', 'status', 'gender'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

    }




    public function reportNotComplateData(Request $request)
    {
        if($request->has('gender')){
            $requestAll = $request->toArray();
            $query = Student::orderBy('id', 'desc')->where('identifcation_id', null)->orWhere('address_id', null)->orWhere('contact_id', null);
            foreach ($requestAll as $key => $req) {
                if (!($req == "" || null)) {
                    $query->where($key, $req);
                }
            }
            $students = $query->orderBy('id','desc')->get();
            return view('student::students.student.index', ['students' => $students]);
        }

        $students = Student::where('identifcation_id', null)->orWhere('address_id', null)->orWhere('contact_id', null)->get();
        return view('student::students.student.index', ['students' => $students]);
    }



    public function allStudents(Request $request)
    {
        if($request->has('gender')){
            $requestAll = $request->toArray();
            $query = DB::table('students')->select('*');
            foreach ($requestAll as $key => $req) {
                if (!($req == "" || null)) {
                    $query->where($key, $req);
                }
            }
            $students = $query->orderBy('id','desc')->get();

            return view($students)->withErrors;
            return StudentResource::collection($students);
        }
            return StudentResource::collection(Student::all());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('student::students.student.create');
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function addStudentManual()
    {
        return view('student::students.student.add-student-manual');
    }

    public function pay()
    {
        return view('student::students.account.fees.index');
    }

    public function payRegistration()
    {
        return view('student::create');
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateStudentRequest $request)
    {
        // dd($request->all());
        $request['is_staff_son'] = request()->has('is_staff_son')? true : false;
        $student = Student::create($request->all());
        if($student){
            $studentParent = StudentParent::find($request->student_parent_id);
            $studentParent->students()->attach($student);
            Session::flash('flash_massage_type');
            if($request['save-and-new']){
                return redirect()->back()->withFlashMassage('تم انشاء الحساب بنجاح');
            }
            return redirect()->route('students.index')->withFlashMassage('student Created Susscefully');
        }
    }

    public function addAddress(Request $request, $id)
    {
        $data = [
            "name" => $request->name,
            "gender" => $request->gender,
            "religion" => $request->religion,
            "is_staff_son" => $request->is_staff_son,
            "birthday" => $request->birthday,
            "start_data" => $request->start_data,
            "education_year" => "2019-05-07",//$request->education_year,
            "note" => $request->note
        ];
        // $id = Student::create($data)->id;
        // return response()->json([
        //     'message' => 'تم الحفظ بنجاح',
        //     'student_id' => 2//$id
        // ], 201);
        if($request->has('studentIdToSend')){
            dd($request->all());

        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $studentInfo = Student::findOrFail($id);
        return view('student::students.student.show', ['studentInfo' => $studentInfo]);
        return new SingleStudentResource(Student::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $studentInfo = Student::findOrFail($id);
        return view('student::students.student.edit', ['studentInfo' => $studentInfo]);

        return Student::with('addresses')->with('contacts')->with('identifcations')->with('health')->findOrfail($id);
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateStudentRequest $request, $id)
    {
        $updateStudent = Student::findOrfail($id)->update($request->all());
        if($updateStudent){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('Student Updated Susscefully');
        }
    }

    // public function update(CreateStudentRequest $request, $id)
    // {
    //     Student::findOrfail($id)->update($request->all());
    //     return response()->json([
    //             'message' => 'تم التحديث بنجاح',
    //         ], 200);
    // }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Student::findOrfail($id)->delete();
        return redirect()->route('students.index')->withFlashMassage('Student Deleted Susscefully');
    }

    public function studentOnlyTrashed(Request $request)
    {
        $studentTrashed = Student::onlyTrashed()->get();
        return view('student::students.student.trashed-student', ['studentTrashed' => $studentTrashed]);
    }


    public function restoreStudent(Request $request, $id)
    {
        Student::where('id', $id)->restore();
        return redirect()->back()->withFlashMassage('Student restore Susscefully');
    }




    public function fees(Request $request, $id)
    {
        $student = Student::where('id', $id)->first();
        $payClasses = PayClass::where('level_id', $student->level->id)->where('classroom_id', $student->classroom->id)->get();
        $operations = Operation::where('student_id', $id)->get();
        return view('student::students.student.fees', ['payClasses' => $payClasses, 'operations' => $operations, 'student' => $student]);
    }

    public function report_quality(){

    }
    public function report_emp_student(){

    }
    public function report_separate(){

    }
    public function report_warning(){

    }
    public function report_auth(){

    }

}
