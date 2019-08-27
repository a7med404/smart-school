<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\StudentParent;
use Modules\Student\Transformers\StudentParentResource;
use Modules\Student\Http\Requests\CreateStudentStudentParentRequest;
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
        $studentParent = StudentParent::create($request->all());
        if($studentParent){
            Session::flash('flash_massage_type');
            return redirect()->route('studentParents.index')->withFlashMassage('StudentParent Created Susscefully');
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
