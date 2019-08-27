<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Permissiontodepart;
use Modules\Student\Http\Requests\CreatePermissiontodepartRequest;
use Session;
class PermissiontodepartController extends Controller
{
    public function index()
    {
        $permissiontodeparts = Permissiontodepart::all();
        return view('student::students.offprints.permissiontodepart.index ', ['permissiontodeparts' => $permissiontodeparts]);
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
    public function store(CreatePermissiontodepartRequest $request)
    {
        $permissiontodepart = Permissiontodepart::create($request->all());
         if($permissiontodepart){
            Session::flash('flash_massage_type');
             return redirect()->route('permissiontodepart.index')->withFlashMassage('Permissiontodepart Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $Infos= Permissiontodepart::findOrFail($id);
        return view('student::students.offprints.permissiontodepart.show', ['Infos' => $Infos]);
    }
    /**
     * Show all classrooms in one permissiontodepart .
     * @param int $id
     * @return Response
     */


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $permissiontodepartInfo = Permissiontodepart::findOrFail($id);
        return view('student::students.offprints.permissiontodepart.edit', ['permissiontodepartInfo' => $permissiontodepartInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePermissiontodepartRequest $request, $id)
    {
        Permissiontodepart::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('permissiontodepart.index')->withFlashMassage('Permissiontodepart Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $permissiontodepart = Permissiontodepart::findOrFail($id)->delete();
        Session::flash('flash_massage_type');
        return redirect()->route('permissiontodepart.index')->withFlashMassage('Permissiontodepart Deleted Susscefully');
    }
}
