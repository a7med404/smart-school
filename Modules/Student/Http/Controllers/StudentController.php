<?php

namespace Modules\Student\Http\Controllers;

use \DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Student;
use Modules\Student\Transformers\StudentResource;
use Modules\Student\Transformers\SingleStudentResource;
use Modules\Student\Http\Requests\CreateStudentRequest;
use Session;
class StudentController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
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
        return view('student::create');
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
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        if($student){
            Session::flash('flash_massage_type');
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
        return redirect()->back()->withFlashMassage('Student Deleted Susscefully');
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
