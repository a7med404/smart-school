<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Level;
use Illuminate\Support\Facades\DB;
use Modules\Student\Entities\Student;

class StudentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('student::index');
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
        return view('student::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('student::edit');
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

    public function viewPage(Request $request, $report)
    {

        $data = [];
        switch($report){
            case 'levels':
                if($request->has('filter')){
                    $requestAll = $request->toArray();
                    $query = Level::orderBy('id','desc');
                    foreach ($requestAll as $key => $req) {
                        if (!($req == "" || null)) {
                            $query->where($key, $req);
                        }
                    }
                    $data = $query->orderBy('id','desc')->get();
                }else {
                    $data = Level::all();
                }
                break;
            case 'report-separates':
                $data = \DB::table('report-separates')->get();
                break;
            case 'report-emp-student':
                if($request->has('filter')){
                    $data = Student::orderBy('id','desc')->where('student_parent_id', $request->student_parent_id)->get();
                }else {
                    $data = Student::where('is_staff_son', 1)->get();
                }
                break;
            case 'report_warnings':
                $data = \DB::table('report-warnings')->get();
                break;
            case 'report-school-register':
                $data = Student::where('level_id', 7)
                ->orWhere('classroom_id', 1)
                ->orWhere('part_id', 1)
                ->orWhere('gender', 1)
                ->get();
                break;
            default:
            return abort(404);
        }
        view("student::print.$report.print-page", ['data' => $data]);
        return view("student::students.reports.$report", ['data' => $data]);
    }

    // public function viewPage(Request $request, $report)
    // { 
    //    dd($report);
    // }


}
