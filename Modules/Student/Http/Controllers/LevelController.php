<?php

namespace Modules\Student\Http\Controllers;

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
            return redirect()->route('levels.index')->withFlashMassage('Level Created Susscefully');
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
      return redirect()->back()->withFlashMassage('Level Updated Susscefully');
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
      return redirect()->back()->withFlashMassage('Level Deleted Susscefully');
    }      


}
