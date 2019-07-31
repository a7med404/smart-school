<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\StudentPull;
use Modules\Student\Transformers\StudentPullResource;
use Modules\Student\Http\Requests\CreateStudentPullRequest;
use Session;
class StudentPullController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $studentPulls = StudentPull::orderBy('id', 'asc')->get();
        return view('student::students.student-pulls.index', ['studentPulls' => $studentPulls]);
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
    public function store(CreateStudentPullRequest $request)
    { 
        $studentPull = StudentPull::create($request->all());
        if($studentPull){
            Session::flash('flash_massage_type');
            return redirect()->route('student-pulls.index')->withFlashMassage('StudentPull Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $studentPullInfo = StudentPull::findOrFail($id);
        return view('student::students.student-pulls.show', ['studentPullInfo' => $studentPullInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $studentPullInfo = StudentPull::findOrFail($id);
        return view('student::students.student-pulls.edit', ['studentPullInfo' => $studentPullInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateStudentPullRequest $request, $id)
    {
        // dd($request->all());
        $studentPullUpdate = StudentPull::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('StudentPull Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, StudentPull $OnestudentPull)
    {
      $studentPullForDelete = $OnestudentPull->findOrfail($id);
      $studentPullForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('StudentPull Deleted Susscefully');
    }     

}
