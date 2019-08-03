<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Managament;
use Modules\Employee\Entities\Department;
use Modules\Employee\Transformers\ManagamentResource;
use Modules\Employee\Http\Requests\CreateManagamentRequest;
class ManagamentController extends Controller
{
      /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $managaments = Managament::all();
        return view('employee::employees.managaments.index',['managaments' => $managaments,'departments' => Department::all()]);
    }
 
   public function create()
   {
       return view('employee::create');
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Response
    */
   public function store(CreateManagamentRequest $request)
   {
       $Managament= Managament::create($request->all());
       if($Managament){
           Session::flash('flash_massage_type');
           return redirect()->route('managaments.index')->withFlashMassage('managament Created Susscefully');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $ManagamentInfo = managament::findOrFail($id);
       return view('employee::.employees.managaments.management.show', ['ManagamentInfo' => $ManagamentInfo]);
   }
   /**
    * Show all classrooms in one managament .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(managament::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $ManagamentInfo = Managament::findOrFail($id);
       return view('employee::employees.managaments.management.edit', ['ManagamentInfo' => $ManagamentInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreatemanagamentRequest $request, $id)
   {
     Managament::findOrfail($id)->update($request->all());
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('managament Updated Susscefully');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, Managament $Onemanagament)
   {
     $Onemanagament->findOrfail($id)->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('managament Deleted Susscefully');
   }      
}