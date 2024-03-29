<?php

namespace Modules\Student\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\StudentParent;
use Modules\Student\Transformers\StudentParentResource;
use Session;
use Modules\Student\Http\Requests\CreateStudentParentRequest;
use Hash;
use URL;
use Modules\Student\Http\Requests\CreateAuthStudentParentRequest;

class StudentParentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $studentParents = StudentParent::orderBy('id', 'asc')->get();
        return view('student::students.student-parents.index', ['studentParents' => $studentParents]);
    }

    public function ParentTable()
    {
        // return "jhgf";
        return DataTables::of(StudentParent::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($studentParent) {
                return view('student::students.student-parents.options', ['id' => $studentParent->id, 'routeName' => 'studentParent']);
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
             ->editColumn('nationality', function ($student) {
                 return  nationality()[1];
             })
            ->rawColumns(['last_login', 'roles', 'options', 'status', 'gender','nationality'])
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
    public function store(CreateStudentParentRequest $request)
    {
        $request['is_die'] = request()->has('is_die')? true : false;
        $request['password'] = Hash::make($request->password);
        $studentParent = StudentParent::create($request->all());
        if($studentParent){
            Session::flash('flash_massage_type');
            if(URL::previous() == route('students.create')){
                return redirect()->back()->withFlashMassage('تم انشاء الحساب بنجاح');
            }
            return redirect()->route('student-parents.index')->withFlashMassage('StudentParent Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $studentParentInfo = StudentParent::findOrFail($id);
         
        return view('student::students.student-parents.show', ['studentParentInfo' => $studentParentInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $studentParentInfo = StudentParent::findOrFail($id);
        return view('student::students.student-parents.edit', ['studentParentInfo' => $studentParentInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function showEditAuthForm($id)
    {
        $studentParentInfo = StudentParent::findOrFail($id);
        return view('student::students.student-parents.edit-auth', ['studentParentInfo' => $studentParentInfo]);
    }


    public function saveEditAuth(CreateAuthStudentParentRequest $request, $id)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        $studentParentUpdate = StudentParent::findOrfail($id)->update($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('StudentParent Updated Susscefully');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateStudentParentRequest $request, $id)
    {
        $studentParentUpdate = StudentParent::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('StudentParent Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, StudentParent $OnestudentParent)
    {
      $studentParentForDelete = $OnestudentParent->findOrfail($id);
      $studentParentForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('StudentParent Deleted Susscefully');
    }

}
