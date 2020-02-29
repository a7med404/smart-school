<?php

namespace Modules\Employee\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Modules\Employee\Entities\Progenitor;
use Modules\Employee\Entities\Employee;
use Modules\Employee\Http\Requests\CreateProgenitorRequest;
class ProgenitorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $prog=Progenitor::all();
        return view('employee::employees.salary.progenitor.index',compact('prog'));
    }


    public function progenitorsDataTable()
    {
        // return "jhgf";
        return DataTables::of(Progenitor::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($progenitor) {
                return view('student::students.colums.options', ['id' => $progenitor->id, 'routeName' => 'progenitors']);
            })

            ->editColumn('gender', function ($customer) {
                return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
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
            // ->editColumn('employee_id', function ($student) {
            //     return $student->employee->id;
            // })
            // ->editColumn('classroom_id', function ($student) {
            //     return $student->classroom->name;
            // })
            //  ->editColumn('part_id', function ($student) {
            //     return $student->part->name;
            // })
            ->rawColumns(['last_login', 'employee_id', 'options', 'status', 'gender'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

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
    public function store(CreateProgenitorRequest $request)
    {
        $id =  Progenitor::create($request->all());
        if($id){
            Session::flash('flash_massage_type');
            return redirect()->route('progenitors.index')->withFlashMassage('Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $shows=Progenitor::find($id);

        return view('employee::employees.salary.progenitor.show',compact('shows'));


    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

        $shows=Progenitor::find($id);
        return view('employee::employees.salary.progenitor.edit',compact('shows'));

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateProgenitorRequest $request, $id)
    {
        $shows=Progenitor::find($id);
        $shows->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $delete=Progenitor::find($id);
        $delete->delete();
        return redirect()->back();
    }


}
