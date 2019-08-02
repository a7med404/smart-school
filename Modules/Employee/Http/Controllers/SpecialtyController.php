<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Specialty;
use Modules\Employee\Transformers\SpecialtyResource;
use Modules\Employee\Http\Requests\CreateSpecialtyRequest;
class SpecialtyController extends Controller
{
      /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $specilaity = Specilaity::all();

        return view('employee::employees.managaments.index',['specilaitys' => $specilaity,'managaments' => Managament::all()]);
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
   public function store(CreateSpecilaityRequest $request)
   {
       $specilaity = pecilaity::create($request->all());

       if($specilaity){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('specilaity Created Susscefully');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $specilaityInfo = pecilaity::findOrFail($id);
       return view('employee::.employees.managaments.specilaity.show', ['specilaityInfo' => $specilaityInfo]);
   }
   /**
    * Show all classrooms in one specilaity .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(pecilaity::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $specilaityInfo = Specilaity::findOrFail($id);
       return view('employee::employees.managaments.specilaity.edit', ['specilaityInfo' => $specilaityInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateSpecilaityRequest $request, $id)
   {
     $updatespecilaity = Specilaity::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('specilaity Updated Susscefully');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, specilaity $Onespecilaity)
   {
     $specilaityForDelete = $Onespecilaity->findOrfail($id);
     $specilaityForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('specilaity Deleted Susscefully');
   }      
}