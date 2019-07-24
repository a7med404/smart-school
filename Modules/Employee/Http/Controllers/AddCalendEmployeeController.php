<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\AddCalendEmployee;
use Modules\Employee\Transformers\AddCalendEmployeeResource;
use Modules\Employee\Http\Requests\CreateAddCalendEmployeeRequest;
class AddCalendEmployeeController extends Controller
{ 
     /**
    * Display a listing of the resource.
    * @return Response
 
   /**
    * Show the form for creating a new resource.
    * @return Response
    */

    public function index()
    {
        $AddCalend = AddCalendEmployee::all();
        return view('employee::employees.calends.index', ['AddCalends' => $AddCalend]);
    }
 
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('employee::create');
    }
 
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateAddCalendEmployeeRequest $request)
    {
        $AddCalend= AddCalendEmployee::create($request->all());
 
        if($AddCalend){
 
            Session::flash('flash_massage_type');
            return redirect()->route('AddCalends.index')->withFlashMassage('تمت اضافة المخالفة بنجاح');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $AddCalendInfo = AddCalendEmployee::findOrFail($id);
        return view('employee::employees.calends.show', ['AddCalendInfo' => $AddCalendInfo]);
    }
    /**
     * Show all classrooms in one AddCalend .
     * @param int $id
     * @return Response
     */
    public function classrooms($id)
    {
        return new ClassroomResource(AddCalend::findOrfail($id)->classrooms);
        /* return view('employee::show'); */
    }
 
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $AddCalendInfo = AddCalendEmployee::findOrFail($id);
        return view('employee::employees.calends.edit', ['AddCalendInfo' => $AddCalendInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateAddCalendEmployeeRequest $request, $id)
    {
      $updateAddCalend = AddCalendEmployee::findOrfail($id)->update($request->all());
      
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage(' تم تعديل المخالفة بنجاح');
    }
 
 
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, AddCalendEmployee $OneAddCalend)
    {
      $AddCalendForDelete = $OneAddCalend->findOrfail($id);
      $AddCalendForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم حذف المخالفة بنجاح');
    }      
}
