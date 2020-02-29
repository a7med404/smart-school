<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EmpHoliday;
use Modules\Employee\Transformers\EmpHolidayResource;
use Modules\Employee\Http\Requests\CreateEmpHolidayRequest;
class EmpHolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
   public function index()
   {
       $empholiday = EmpHoliday::all();
       return view('employee::employees.holiday.empholiday.index', ['empholidays' => $empholiday]);
   }

public function EmpTable()
    {
        // return "jhgf";
        return DataTables::of(EmpHoliday::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($empholidy) {
                return view('employee::employees.colums.options', ['id' => $empholidy->id, 'routeName' => 'emp-holidays']);
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
            //  ->editColumn('student_id', function ($student) {
            //     return $student->student->name;
            // })
            ->editColumn('add_holiday_id', function ($holiday) {
                 return $holiday->addholiday->name;
             })
            ->editColumn('employee_id', function ($emp) {
                return $emp->employee->full_name;
            })
            ->rawColumns(['last_login', 'roles', 'options', 'status', 'employee_id','add_holiday_id'])
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
   public function store(CreateEmpHolidayRequest $request)
   {
       $EmpHoliday= EmpHoliday::create($request->all());

       if($EmpHoliday){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('تمت اضافة طلب الاجازة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $empholidayInfo = empholiday::findOrFail($id);
       return view('employee::employees.holiday.empholiday.show', ['empholidayInfo' => $empholidayInfo]);
   }
   /**
    * Show all classrooms in one empholiday .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(empholiday::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $empholidayInfo = EmpHoliday::findOrFail($id);
       return view('employee::employees.holiday.empholiday.edit', ['empholidayInfo' => $empholidayInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateEmpHolidayRequest $request, $id)
   {
     $updateempholiday = EmpHoliday::findOrfail($id)->update($request->all());

     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage(' تم تعديل طلب الاجازة بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, EmpHoliday $Oneempholiday)
   {
     $EmpHolidayForDelete = $Oneempholiday->findOrfail($id);
     $EmpHolidayForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم حذف طلب الاجازة بنجاح');
   }

}
