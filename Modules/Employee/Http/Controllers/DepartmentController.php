<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Department;
use Modules\Employee\Entities\Managament;
use Modules\Employee\Transformers\DepartmentResource;
use Modules\Employee\Http\Requests\CreateDepartmentRequest;
class DepartmentController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $department = Department::all();

        return view('employee::employees.managaments.index',['departments' => $department,'managaments' => Managament::all(),'specilaities' => Speciality::all()]);
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
   public function store(CreateDepartmentRequest $request)
   {
       $department = Department::create($request->all());

       if($department){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('department Created Susscefully');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $departmentInfo = Department::findOrFail($id);
       return view('employee::.employees.managaments.department.show', ['departmentInfo' => $departmentInfo]);
   }
   /**
    * Show all classrooms in one department .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(Department::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $departmentInfo = Department::findOrFail($id);
       return view('employee::employees.managaments.department.edit', ['departmentInfo' => $departmentInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateDepartmentRequest $request, $id)
   {
     $updatedepartment = Department::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('department Updated Susscefully');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, department $Onedepartment)
   {
     $departmentForDelete = $Onedepartment->findOrfail($id);
     $departmentForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('department Deleted Susscefully');
   }      
}
