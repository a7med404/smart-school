<?php

namespace Modules\Student\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\Level;
use Modules\Student\Transformers\ClassroomResource;
use Modules\Student\Transformers\singleClassroomResource;
use Modules\Student\Http\Requests\CreateClassroomRequest;
use Modules\Student\Transformers\PartResource;
use \Session;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $classrooms = Classroom::orderBy('sort', 'asc')->get();
        return view('student::students.educations.classrooms.index', ['classrooms' => $classrooms]);
    } 
 

    public function classTable()
    {
        // return "jhgf";
        return DataTables::of(Classroom::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($classrooms) {
                return view('student::students.colums.options', ['id' => $classrooms->id, 'routeName' => 'classrooms']);
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
            ->addColumn('level_id', function ($level) {
                return $level->name;

            })
            ->rawColumns(['level', 'roles', 'options', 'status'])
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
        $classroom = Classroom::create($request->all());
        if($classroom){
            Session::flash('flash_massage_type');
            return redirect()->route('classrooms.index')->withFlashMassage('Classroom Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $classroomInfo = classroom::findOrFail($id);
        return view('student::students.educations.classrooms.show', ['classroomInfo' => $classroomInfo]);
    }
    /**
     * Show parts in one classroom.
     * @param int $id
     * @return Response
     */
    public function parts($id)
    {
        return new PartResource(Classroom::findOrfail($id)->parts);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $classroomInfo = classroom::findOrFail($id);
        return view('student::students.educations.classrooms.edit', ['classroomInfo' => $classroomInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateClassroomRequest $request, $id)
    {
        $classroomUpdate = Classroom::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Classroom Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Classroom $Oneclassroom)
    {
      $classroomForDelete = $Oneclassroom->findOrfail($id);
      $classroomForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Classroom Deleted Susscefully');
    }     


    public function getClassrooms($classroom_id)
    {
        return new ClassroomResource(Classroom::where('classroom_id', $classroom_id)->orderBy('sort', 'asc')->get());
        // return response()->json(['message' => 'تم الحذف بنجاح'], 200);
    }

}
