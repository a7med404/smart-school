<?php

namespace Modules\Student\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Level;
use Modules\Student\Transformers\LevelResource;
use Modules\Student\Transformers\SingleLevelResource;
use Modules\Student\Http\Requests\CreateLevelRequest;
use Modules\Student\Transformers\ClassroomResource;
use PDF;
use \Session;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $levels = Level::orderBy('sort', 'asc')->get();
        return view('student::students.educations.levels.index', ['levels' => $levels]);
    }


    public function leveldataTable()
    {
        // return "jhgf";
        return DataTables::of(Level::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($level) {
                return view('student::students.educations.colums.options', ['id' => $level->id, 'routeName' => 'levels']);
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
        return view('student::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateLevelRequest $request)
    {
        $data = [
            'name'          => $request->name,
            'sort'          => $request->sort,
            'head_master'   => $request->head_master,
            'school_master' => $request->school_master,
        ];
        $level = Level::create($data);
        if($level){
            Session::flash('flash_massage_type');
            return redirect()->route('levels.index')->withFlashMassage('تم اضافة بنجاح');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $levelInfo = level::findOrFail($id);
        return view('student::students.educations.levels.show', ['levelInfo' => $levelInfo]);
    }
    /**
     * Show all classrooms in one level .
     * @param int $id
     * @return Response
     */
    public function classrooms($id)
    {
        return new ClassroomResource(Level::findOrfail($id)->classrooms);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $levelInfo = level::findOrFail($id);
        return view('student::students.educations.levels.edit', ['levelInfo' => $levelInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateLevelRequest $request, $id, Level $Onelevel)
    {
      $levelUpdate = $Onelevel->findOrFail($id);
      $data = [
            'name'          => $request->name,
            'sort'          => $request->sort,
            'head_master'   => $request->head_master,
            'school_master' => $request->school_master,
        ];
      $updateLevel = $levelUpdate->fill($data)->save();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم التحديث بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Level $Onelevel)
    {
      $levelForDelete = $Onelevel->findOrfail($id);
      $levelForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
    }


}
