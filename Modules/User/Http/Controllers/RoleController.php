<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Http\Requests\CreateRoleRequest;
use Modules\User\Entities\Permission;
use Modules\User\Entities\Role;
use \Session;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
      return view('user::roles.index', ['roles' => $roles, 'permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('user::roles.add', ['permissions' => $permissions]);
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
      return redirect('cpanel/roles')->withFlashMassage('Role Created Susscefully');
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
        return view('user::roles.show', ['roleInfo' => $roleInfo]);
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
        return view('user::roles.edit', ['roleInfo' => $roleInfo, 'permissions' => $permissions]);
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
