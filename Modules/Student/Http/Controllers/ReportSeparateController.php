<?php

namespace Modules\Student\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\ReportSeparate;
use Modules\Student\Transformers\ReportSeparateResource;
use Modules\Student\Http\Requests\CreateReportSeparateRequest;
use Session;

class ReportSeparateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $separate = ReportSeparate::latest()->first();
        return view('student::students.student.reports.report-separates.index',compact('separate'));
    }

    public function separatesDataTable()
    {
        // return "jhgf";
        return DataTables::of(ReportSeparate::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($student) {
                return view('student::students.colums.options', ['id' => $student->id, 'routeName' => 'report-separates']);
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
            // ->editColumn('level_id', function ($student) {
            //     return $student->level->name;
            // })
            // ->editColumn('classroom_id', function ($student) {
            //     return $student->classroom->name;
            // })
             ->editColumn('student_id', function ($student) {
                return $student->student->name;
            })
            ->rawColumns(['last_login', 'student_id', 'options', 'status', 'gender'])
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
    public function store(CreateReportSeparateRequest $request)
    {
        $reportSeparate = ReportSeparate::create($request->all());
        if($reportSeparate){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('تم الاضافة بنجاح');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $reportSeparateInfo = ReportSeparate::findOrFail($id);
        return view("student::print.report-separates.print-student-page", ['reportSeparateInfo' => $reportSeparateInfo]);
        return view('student::students.reports.report-separates.print-student-page', ['reportSeparateInfo' => $reportSeparateInfo]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function printStudentPage($id)
    {
        $reportSeparateInfo = ReportSeparate::findOrFail($id);
        return view('student::students.reports.report-separates.print-student-page', ['reportSeparateInfo' => $reportSeparateInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $reportSeparateInfo = ReportSeparate::findOrFail($id);
        return view('student::students.reports.report-separates.edit', ['reportSeparateInfo' => $reportSeparateInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateReportSeparateRequest $request, $id)
    {
        $reportSeparateUpdate = ReportSeparate::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('تم التحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, ReportSeparate $OnereportSeparate)
    {
      $reportSeparateForDelete = $OnereportSeparate->findOrfail($id);
      $reportSeparateForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
    }

}
