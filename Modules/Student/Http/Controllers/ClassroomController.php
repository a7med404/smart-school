<?php

namespace Modules\Student\Http\Controllers;

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
        $levels = Level::orderBy('sort', 'asc')->get();
        $classrooms = Classroom::orderBy('sort', 'asc')->get();
        return view('student::students.educations.classrooms.index', ['classrooms' => $classrooms, 'levels' => $levels]);
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
