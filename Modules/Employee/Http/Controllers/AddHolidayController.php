<?php

namespace Modules\Employee\Http\Controllers;

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
    * @return Response
    */
   public function index()
   {
       return  AddHolidayResource::collection(AddHoliday::all());
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
   public function store(CreateAddHolidayRequest $request)
   {
       $id =  AddHoliday::create($request->all())->id;
       return response()->json([
           'message' => 'تم الحفظ بنجاح',
           'AddHoliday_id' => $id
       ], 201);
   }

   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       return new AddHolidayResource(AddHoliday::findOrfail($id));
       /* return view('student::show'); */
   }


   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       return new AddHolidayResource(AddHoliday::findOrfail($id));
       /* return view('student::edit'); */
   }

   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Responsedestroy
    */
   public function update(CreateAddHolidayRequest $request, $id)
   {
       AddHoliday::findOrfail($id)->update($request->all());
       return response()->json([
           'message' => 'تم التحديث بنجاح',
       ], 200);
   }

   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id)
   {
       AddHoliday::findOrfail($id)->delete();
       return response()->json([
           'message' => 'تم الحذف بنجاح',
       ], 200);
   }
}
