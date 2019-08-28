<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpHoliday;
use Modules\Employee\Transformers\EmpHolidayResource;
use Modules\Employee\Http\Requests\CreateEmpHolidayRequest;
class EmpHolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
   public function index()
   {
       $empholiday = EmpHoliday::all();
       return view('employee::employees.holiday.empholiday.index', ['empholidays' => $empholiday]);
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
   public function store(CreateEmpHolidayRequest $request)
   {
       $EmpHoliday= EmpHoliday::create($request->all());

       if($EmpHoliday){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('تمت اضافة طلب الاجازة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $empholidayInfo = empholiday::findOrFail($id);
       return view('employee::employees.holiday.empholiday.show', ['empholidayInfo' => $empholidayInfo]);
   }
   /**
    * Show all classrooms in one empholiday .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(empholiday::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $empholidayInfo = EmpHoliday::findOrFail($id);
       return view('employee::employees.holiday.empholiday.edit', ['empholidayInfo' => $empholidayInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateEmpHolidayRequest $request, $id)
   {
     $updateempholiday = EmpHoliday::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage(' تم تعديل طلب الاجازة بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, EmpHoliday $Oneempholiday)
   {
     $EmpHolidayForDelete = $Oneempholiday->findOrfail($id);
     $EmpHolidayForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم حذف طلب الاجازة بنجاح');
   }      

}
