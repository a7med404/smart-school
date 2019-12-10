<?php

namespace Modules\Employee\Http\Controllers;

use \DB;
use Yajra\DataTables\DataTables;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Calend;
use Modules\Employee\Transformers\CalendResource;
use Modules\Employee\Http\Requests\CreateAddCalendRequest;

class AddCalendController extends Controller
{
    /**
   /**
    * Display a listing of the resource.
    * @return Response
    */
   public function index()
   {
       $calend = Calend::all();
       return view('employee::calends.index', ['calends' => $calend]);
   }
   public function CalendTables()
   {
       return DataTables::of(Calend::orderBy('id', 'desc')->get())
           ->addColumn('options', function ($calend) {
               return view('employee::colums.options', ['id' => $calend->id, 'routeName' => 'calends']);
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
    * Show the form for creating a new resource.
    * @return Response
    */
   public function create()
   {
       return view('employee::create');
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Response
    */
   public function store(CreateAddCalendRequest $request)
   {
       $Calend= Calend::create($request->all());
       if($Calend){
           Session::flash('flash_massage_type');
           return redirect()->route('calends.index')->withFlashMassage('تمت اضافة المخالفة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $calendInfo = Calend::findOrFail($id);
       return view('employee::calends.show', ['calendInfo' => $calendInfo]);
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $calendInfo = Calend::findOrFail($id);
       return view('employee::calends.edit', ['calendInfo' => $calendInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateAddCalendRequest $request, $id)
   {
     Calend::findOrfail($id)->update($request->all());
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage(' تم تعديل المخالفة بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, Calend $Onecalend)
   {
     $Onecalend->findOrfail($id)->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم حذف المخالفة بنجاح');
   }

}
