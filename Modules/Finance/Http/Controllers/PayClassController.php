<?php

namespace Modules\Finance\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\PayClass;
use Modules\Finance\Http\Requests\CreatePayClassRequest;
class PayClassController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $PayClases = PayClass::all();
        return view('finance::account.pay-class.index', ['PayClases' => $PayClases]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('finance::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreatePayClassRequest $request)
    {
        $PayClases= PayClass::create($request->all());

        if($PayClases){
            Session::flash('flash_massage_type');
            return redirect()->route('pay-classes.index')->withFlashMassage('PayClass Created Susscefully');
        }
    }
    
    public function payTables()
    {
        return DataTables::of(PayClass::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($PayClass) {
                return view('Finance::calends.colums.options', ['id' => $PayClass->id, 'routeName' => 'PayClass.dataTables']);
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
            ->rawColumns(['last_login', 'roles', 'options', 'status'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);
 
    }
 
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $PayClassInfo = PayClass::findOrFail($id);
        return view('finance::account.pay-class.show', ['PayClassInfo' => $PayClassInfo]);
    }
    /**
     * Show all classrooms in one PayClass .
     * @param int $id
     * @return Response
     */
    public function classrooms($id)
    {
        return new ClassroomResource(PayClass::findOrfail($id)->classrooms);
        /* return view('finance::show'); */ 
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $PayClassInfo = PayClass::findOrFail($id);
        return view('finance::account.pay-class.edit', ['PayClassInfo' => $PayClassInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayClassRequest $request, $id)
    {
      PayClass::findOrfail($id)->update($request->all());
      Session::flash('flash_massage_type');
      return redirect()->route('pay-classes.index')->withFlashMassage('PayClass Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, PayClass $OnePayClass)
    {
      $OnePayClass->findOrfail($id)->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('PayClass Deleted Susscefully');
    }      
 
}
