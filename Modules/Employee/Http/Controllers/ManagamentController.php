<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Yajra\DataTables\DataTables;
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
    public function ManagamentTables()
    {
        // return "jhgf";
        return DataTables::of(Managament::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($managament) {
                return view('employee::employees.managaments.colums.options', ['id' => $managament->id, 'routeName' => 'managaments']);
            })

            // ->editColumn('gender', function ($customer) {
            //     return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';

            // ->addColumn('last_login', function (student $student) {
            //     if($student->last_login != null) {
            //         return \Carbon\Carbon::parse($student->last_login)->diffForhumans();
            //     }
            //     return $student->last_login;
            // })

            // ->addColumn('roles', function ($student) {
            //     // $data = [];
            //     // foreach ($student->roles as $role) {
            //         return view('student::students.colums.role', ['roles' => $student->roles]);
            //         // $data[] = '<span class="label label-light-info">'.$role->display_name.'</span>';
            //     // }
            //     // return $data;
            // })
            // ->editColumn('level_id', function ($student) {
            //     return $student->level->name;
            // })

            ->rawColumns(['last_login', 'options', 'status'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

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
           return redirect()->route('managaments.index')->withFlashMassage('تم الاضافة بنجاح');
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
     return redirect()->back()->withFlashMassage('تم التحديث بنجاح');
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
     return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
   }
}
