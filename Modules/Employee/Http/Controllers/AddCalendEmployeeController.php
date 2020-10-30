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
    * Show the form for creating a new resource.
    * @return Response
    */
    public function index()
    {
        $addCalendEmp = AddCalendEmployee::all();
        return view('employee::employees.add-calends-emp.index', ['addCalendEmps' => $addCalendEmp]);
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
        $addCalendEmp= AddCalendEmployee::create($request->all());
        if($addCalendEmp){
            Session::flash('flash_massage_type');
            return redirect()->route('add-calends-emp.index')->withFlashMassage('تمت اضافة المخالفة بنجاح');
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
        return view('employee::employees.add-calends-emp.show', ['AddCalendInfo' => $AddCalendInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $AddCalendInfo = AddCalendEmployee::findOrFail($id);
        return view('employee::employees.add-calends-emp.edit', ['AddCalendInfo' => $AddCalendInfo]);
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
