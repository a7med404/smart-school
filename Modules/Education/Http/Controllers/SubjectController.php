<?php

namespace Modules\Education\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Subject;
use Session;
use Modules\Education\Http\Requests\CreateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('id', 'asc')->get();
        return view('education::subjects.index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('education::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    { 
        $subject = Subject::create($request->all());
        if($subject){
            Session::flash('flash_massage_type');
            return redirect()->route('subjects.index')->withFlashMassage('Subject Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $subjectInfo = subject::findOrFail($id);
        return view('education::subjects.show', ['subjectInfo' => $subjectInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $subjectInfo = subject::findOrFail($id);
        return view('education::subjects.edit', ['subjectInfo' => $subjectInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateSubjectRequest $request, $id)
    {
        $subjectUpdate = Subject::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('timetables.index')->withFlashMassage('Subject Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Subject $Onesubject)
    {
      $subjectForDelete = $Onesubject->findOrfail($id);
      $subjectForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Subject Deleted Susscefully');
    }     


}
