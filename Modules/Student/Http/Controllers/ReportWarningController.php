<?php

namespace Modules\Student\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\ReportWarning;
use Modules\Student\Transformers\ReportWarningResource;
use Modules\Student\Http\Requests\CreateReportWarningRequest;
use Session;
class ReportWarningController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $reportWarnings = ReportWarning::orderBy('id', 'asc')->get();
        return view('student::students.student.reports.report-warnings.index');
    }

    public function ReportWarningDataTables()
    {
        // return "jhgf";
        return DataTables::of(ReportWarning::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($student) {
                return view('student::students.colums.options', ['id' => $student->id, 'routeName' => 'report-warnings']);
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
            //  ->editColumn('part_id', function ($student) {
            //     return $student->part->name;
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
    public function store(CreateReportWarningRequest $request)
    {
        $reportWarning = ReportWarning::create($request->all());
        if($reportWarning){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('ReportWarning Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $reportWarningInfo = ReportWarning::findOrFail($id);
        return view('student::students.student.reports.report-warnings.show', ['reportWarningInfo' => $reportWarningInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $reportWarningInfo = ReportWarning::findOrFail($id);
        return view('student::students.student.reports.report-warnings.edit', ['reportWarningInfo' => $reportWarningInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateReportWarningRequest $request, $id)
    {
        $reportWarningUpdate = ReportWarning::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('ReportWarning Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, ReportWarning $OnereportWarning)
    {
      $reportWarningForDelete = $OnereportWarning->findOrfail($id);
      $reportWarningForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('ReportWarning Deleted Susscefully');
    }

}
