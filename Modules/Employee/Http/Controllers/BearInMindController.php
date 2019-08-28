<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\BearInMind;
use Modules\Employee\Transformers\BearInMindResource;
use Modules\Employee\Http\Requests\CreateBearInMindRequest;
use Session;
class BearInMindController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $bearinminds = BearInMind::all();
        return view('employee::employees.BearinMind.index',compact('bearinminds'));
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
    public function store(CreateBearInMindRequest $request)
    {
        $bearinmind=BearInMind::create([
        'note' => $request->note,
        'date' => $request->date,
        'employee_id' => $request->employee_id
        ]);
        if($bearinmind){
            Session::flash('flash_massage_type');
            return redirect()->route('bearinminds.index')->withFlashMassage('Bear in minds Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new BearInMindResource(BearInMind::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $bearinminds=BearInMind::findOrfail($id);
        return view('employee::employees.BearinMind.edit',compact('bearinminds'));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateBearInMindRequest $request, $id)
    {
        BearInMind::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');

        return redirect()->route('bearinminds.index')->withFlashMassage('Bear in minds updated Susscefully');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
    $bearinmind=BearInMind::findOrfail($id);
    $bearinmind->delete();
    Session::flash('flash_massage_type');
    return redirect()->route('bearinminds.index')->withFlashMassage('Bear in minds deleted Susscefully');

    }

}
