<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('finance::index');
    }

// ublic function financeDataTables()
//     {
//         // return "jhgf";
//         return DataTables::of(Student::orderBy('id', 'desc')->get())
//             ->addColumn('options', function ($student) {
//                 return view('student::students.colums.options', ['id' => $student->id, 'routeName' => 'students']);
//             })

//             ->editColumn('gender', function ($customer) {
//                 return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
//             })
//             // ->addColumn('last_login', function (student $student) {
//             //     if($student->last_login != null) {
//             //         return \Carbon\Carbon::parse($student->last_login)->diffForhumans();
//             //     }
//             //     return $student->last_login;
//             // })

//             // ->addColumn('roles', function ($student) {
//             //     // $data = [];
//             //     // foreach ($student->roles as $role) {
//             //         return view('student::students.colums.role', ['roles' => $student->roles]);
//             //         // $data[] = '<span class="label label-light-info">'.$role->display_name.'</span>';
//             //     // }
//             //     // return $data;
//             // })
//             // ->editColumn('status', function ($student) {
//             //     return $student->status == 0 ? '<span class="label label-light-warning">' . status()[$student->status] . '</span>' : '<span class="label label-light-success">' . status()[$student->status] . '</span>';
//             // })
//             ->rawColumns(['last_login', 'roles', 'options', 'status', 'gender'])
//             // ->removeColumn('password')
//             // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
//             ->setRowId('{{$id}}')
//             ->make(true);

//     }
//     /**
    
    public function create()
    {
        return view('finance::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('finance::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('finance::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
