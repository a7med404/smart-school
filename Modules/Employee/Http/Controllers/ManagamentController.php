<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Managament;
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
       
        return view('employee::employees.managaments.index');
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
   public function store(CreateempPullRequest $request)
   {
       $Empull= empPull::create($request->all());

              

       if($Empull){

           Session::flash('flash_massage_type');
           return redirect()->route('pay-classes.index')->withFlashMassage('empPull Created Susscefully');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $empPullInfo = EmpPull::findOrFail($id);
       return view('employee::empPulls.show', ['EmpullInfo' => $EmpullInfo]);
   }
   /**
    * Show all classrooms in one empPull .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(empPull::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $empPullInfo = empPull::findOrFail($id);
       return view('employee::employees.claends.edit', ['EmpullInfo' => $EmpullInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateempPullRequest $request, $id)
   {
     $updateempPull = empPull::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('empPull Updated Susscefully');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, Empull $OneempPull)
   {
     $EmpullForDelete = $OneempPull->findOrfail($id);
     $EmpullForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('empPull Deleted Susscefully');
   }      
}