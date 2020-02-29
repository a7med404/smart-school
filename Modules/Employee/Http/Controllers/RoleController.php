<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Http\Requests\CreateRoleRequest;
use Modules\Employee\Entities\Permission;
use Modules\Employee\Entities\Role;
use \Session;

class RoleController extends Controller
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
      $roles = Role::all();
      $permissions = Permission::all();
      return view('employee::roles.index', ['roles' => $roles, 'permissions' => $permissions]);
    }
    public function RoleDataTables()
    {
        // return "jhgf";
        return DataTables::of(Role::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($role) {
                return view('employee::roles.options', ['id' => $role->id, 'routeName' => 'roles']);
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
            // ->editColumn('level_id', function ($student) {
            //     return $student->level->name;
            // })
            // ->editColumn('classroom_id', function ($student) {
            //     return $student->classroom->name;
            // })
            //  ->editColumn('part_id', function ($student) {
            //     return $student->part->name;
            // })
            ->rawColumns(['last_login', 'options', 'status', 'gender'])
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
        $permissions = Permission::all();
        return view('employee::roles.add', ['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
      $newRole = Role::create([
          'name'                     => $request->name,
          'display_name'     => $request->display_name,
          'description'       => $request->description
      ]);
      if ($newRole) {
        if($request->permissions){
          $newRole->attachPermissions($request->permissions);
        }
      }
      Session::flash('flash_massage_type');
      return redirect('cpanelAdmin/roles')->withFlashMassage('Role Created Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roleInfo = role::findOrFail($id);
        return view('employee::roles.show', ['roleInfo' => $roleInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = Permission::all();
        $roleInfo = role::findOrFail($id);
        return view('employee::roles.edit', ['roleInfo' => $roleInfo, 'permissions' => $permissions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRoleRequest $request, $id, Role $Onerole)
    {
      $roleUpdate = $Onerole->findOrFail($id);
      $data = [
        'name'                     => $request->name,
        'display_name'     => $request->display_name,
        'description'       => $request->description
      ];
      // dd($request->permissions);
      $updateRole = $roleUpdate->fill($data)->save();
      if ($updateRole) {
        $roleUpdate->syncPermissions($request->permissions);
      }

      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Role Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Role $Onerole)
    {
      $roleForDelete = $Onerole->findOrfail($id);
      $roleForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Role Deleted Susscefully');
    }
}
