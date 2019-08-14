<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpPerissions;
use Modules\Employee\Transformers\EmpPerissionsResource;
use Modules\Employee\Http\Requests\CreateEmpPerissionsRequest;
use Modules\Employee\Entities\Managament;
use Session;
class EmpPerissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
    $shows=EmpPerissions::all();
return view('employee::employees.perissions.EmpPerission.index',compact('shows'));
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
    public function store(CreateEmpPerissionsRequest $request)
    {
        $id =  EmpPerissions::create($request->all());
        if($id){
            Session::flash('flash_massage_type');
            return redirect()->route('emp-perissions.index')->withFlashMassage('Bear in minds Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new EmpPerissionsResource(EmpPerissions::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

        $shows=EmpPerissions::find($id);
        return view('employee::employees.perissions.EmpPerission.edit',compact('shows'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateEmpPerissionsRequest $request, $id)
    {
        $shows=EmpPerissions::find($id);
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
        $delete=EmpPerissions::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function report(Request $request){

        return  EmpPerissionsResource::collection(EmpPerissions::where('employee_id',$request->employee_id)->where('date','>=',$request->from)->where('date','<=',$request->to)->get());
    }

    public function empSettingPerissions()
    {
        return view('student::create');
    }

}
