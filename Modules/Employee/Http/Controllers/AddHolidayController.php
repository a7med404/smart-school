<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\AddHoliday;
use Modules\Employee\Transformers\AddHolidayResource;
use Modules\Employee\Http\Requests\CreateAddHolidayRequest;
class AddHolidayController extends Controller
{
       /**
    * Display a listing of the resource.
    * @return Response     */
   public function index()
   {
       $addholiday = AddHoliday::all();
       return view('employee::employees.holiday.addholiday.index', ['addholidays' => $addholiday]);
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
   public function store(CreateAddHolidayRequest $request)
   {
       $AddHoliday= AddHoliday::create($request->all());

       if($AddHoliday){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('تمت اضافة الاجازة بنجاح');
           
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $addholidayInfo = addholiday::findOrFail($id);
       return view('employee::employees.holiday.addholiday.show', ['addholidayInfo' => $addholidayInfo]);
   }
   /**
    * Show all classrooms in one addholiday .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(addholiday::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $addholidayInfo = AddHoliday::findOrFail($id);
       return view('employee::employees.holiday.addholiday.edit', ['addholidayInfo' => $addholidayInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateAddHolidayRequest $request, $id)
   {
     $updateaddholiday = AddHoliday::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage(' تم تعديل اسم الاجازة بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, AddHoliday $Oneaddholiday)
   {
     $AddHolidayForDelete = $Oneaddholiday->findOrfail($id);
     $AddHolidayForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم حذف اسم الاجازة بنجاح');
   }      

}
