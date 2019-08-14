<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Progenitor;
use Modules\Employee\Http\Requests\CreateProgenitorRequest;
use Session;
class ProgenitorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $prog=Progenitor::all();
        return view('employee::employees.salary.progenitor.index',compact('prog'));
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
    public function store(CreateProgenitorRequest $request)
    {
        $id =  Progenitor::create($request->all());
        if($id){
            Session::flash('flash_massage_type');
            return redirect()->route('progenitors.index')->withFlashMassage('Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

        $shows=Progenitor::find($id);
        return view('employee::employees.salary.progenitor.edit',compact('shows'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateProgenitorRequest $request, $id)
    {
        $shows=Progenitor::find($id);
        $shows->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $delete=Progenitor::find($id);
        $delete->delete();
        return redirect()->back();
    }


}
