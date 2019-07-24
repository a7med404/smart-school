<?php

namespace Modules\Employee\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Calend;
use Modules\Employee\Transformers\CalendResource;
use Modules\Employee\Http\Requests\CreateAddCalendRequest;

class AddCalendController extends Controller
{
    /**
   /**
    * Display a listing of the resource.
    * @return Response
    */
   public function index()
   {
       $calend = Calend::all();
       return view('employee::calends.index', ['calends' => $calend]);
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
   public function store(CreateAddCalendRequest $request)
   {
       $Calend= Calend::create($request->all());

       if($Calend){

           Session::flash('flash_massage_type');
           return redirect()->route('calends.index')->withFlashMassage('تمت اضافة المخالفة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $calendInfo = calend::findOrFail($id);
       return view('employee::calends.show', ['calendInfo' => $calendInfo]);
   }
   /**
    * Show all classrooms in one calend .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(calend::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $calendInfo = calend::findOrFail($id);
       return view('employee::calends.edit', ['calendInfo' => $calendInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateAddCalendRequest $request, $id)
   {
     $updatecalend = calend::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage(' تم تعديل المخالفة بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, Calend $Onecalend)
   {
     $CalendForDelete = $Onecalend->findOrfail($id);
     $CalendForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم حذف المخالفة بنجاح');
   }      

}
