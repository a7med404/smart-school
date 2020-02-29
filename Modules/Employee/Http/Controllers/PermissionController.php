<?php

namespace Modules\Employee\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Http\Requests\CreatePermissionRequest;
use Modules\Employee\Entities\Permission;
use \Session;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:employee');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $a = Auth::user()->hasPermission('test-permission');
      // $a = auth()->user()->hasRole('superadministrator');
      // $a = Auth::user()->canPermissionsIndex();
      $permissions = Permission::all();
      // dump($a);
      return view('employee::permissions.index', ['permissions' => $permissions]);
    }
    public function PermissionDataTable()
    {
        // return "jhgf";
        return DataTables::of(Permission::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($emp) {
                return view('employee::employees.colums.options', ['id' => $emp->id, 'routeName' => 'permissions']);
            // })

            // ->editColumn('gender', function ($customer) {
            //     return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
            })
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
            // ->editColumn('status', function ($student) {
            //     return $student->status == 0 ? '<span class="label label-light-warning">' . status()[$student->status] . '</span>' : '<span class="label label-light-success">' . status()[$student->status] . '</span>';
            // })

            //      ->editColumn('department_id', function ($dep) {
            //       return $dep->department->name;
            //   })
            //   ->editColumn('managament_id', function ($manag) {
            //         return $manag->managament->name;
            //   })
            ->rawColumns(['last_login', 'roles', 'options', 'status','managament_id'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee::permissions.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(CreatePermissionRequest $request)
     {
       Permission::create([
           'name'                     => $request->name,
           'display_name'     => $request->display_name,
           'description'       => $request->description
       ]);
       Session::flash('flash_massage_type');
       return redirect('cpanelAdmin/permissions')->withFlashMassage('تم الاضافة بنجاح');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $permissionInfo = Permission::findOrFail($id);
      return view('employee::permissions.show', ['permissionInfo' => $permissionInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
         $permissionInfo = permission::findOrFail($id);
         return view('employee::permissions.edit', ['permissionInfo' => $permissionInfo]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(CreatePermissionRequest $request, $id, Permission $Onepermission)
     {
       $permissionUpdate = $Onepermission->findOrFail($id);
       $data = [
         'name'             =>          $request->name,
         'display_name'     =>  $request->display_name,
         'description'      =>   $request->description
       ];
       $permissionUpdate->fill($data)->save();
       Session::flash('flash_massage_type');
       return redirect()->back()->withFlashMassage('تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id, Permission $Onepermission)
     {
       $permissionForDelete = $Onepermission->findOrfail($id);
       // dd($Onepermission->detachPermissions($permissionForDelete));
       $permissionForDelete->delete();
       Session::flash('flash_massage_type');
       return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
     }

}
