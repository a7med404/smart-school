<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Level;
use Illuminate\Support\Facades\DB;
use Modules\Student\Entities\Student;
use Modules\Student\Entities\Attendance;

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

    public function viewPage(Request $request, $report, $printpage = null)
    {
        // dd($printpage);
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
            case 'report-emp-student':
                if($request->has('filter')){
                    $data = Student::orderBy('id','desc')->where('student_parent_id', $request->student_parent_id)->get();
                }else {
                    $data = Student::where('is_staff_son', 1)->get();
                }
                break;
            case 'report-student-attendances':
                if($request->has('filter')){
                    $requestAll = array_except($request->toArray(), ['from', 'to']);
                    $query = Student::orderBy('level_id');
                    foreach ($requestAll as $key => $req) {
                        if (!($req == "" || null)) {
                            $query->where($key, $req);
                        }
                    }
                    $query = $query->join('attendances', function ($join) {
                        $join->on('students.id', '=', 'attendances.student_id');
                            //  ->where('attendances.user_id', '>', 5);
                    })->select('students.*', 'attendances.*', 'attendances.note as attendances_note');

                    if (!($request->from == "" || null) && ($request->to   == "" || null)) {
                        $query = $query->where('date', '>=', $request->from);
                    }elseif (($request->from == "" || null) && !($request->to   == "" || null)) {
                        $query = $query->where('date', '<=', $request->to);
                    }elseif(!($request->from == "" || null) && !($request->to   == "" || null)){
                        $query = $query->whereBetween('date', [$request->from, $request->to]);
                    }
                    $data = $query->get();

                }else {
                    $data = Student::join('attendances', function ($join) {
                        $join->on('students.id', '=', 'attendances.student_id');
                            //  ->where('attendances.user_id', '>', 5);
                    })->select('students.*', 'attendances.*', 'attendances.note as attendances_note')
                    ->get();
                }
                break;
            case 'report-separates':
                $data = \DB::table('report_separates')->get();
                break;
            case 'report-warnings':
                $data = \DB::table('report_warnings')->get();
                break;
            case 'report-data-classrooms':
                $data = Student::where('level_id', 1)
                ->orWhere('classroom_id' , 1)
                ->orWhere('gender', 1)
                ->get();
                break;
            case 'report-school-register':
                    if($request->has('filter')){
                        $requestAll = $request->toArray();
                        $query = Student::orderBy('id', 'asc');
                        foreach ($requestAll as $key => $req) {
                            if (!($req == "" || null)) {
                                $query->where($key, $req);
                            }
                        }
                        $data = $query->orderBy('id','desc')->get();
                    }else{
                        $data = Level::all();
                    }
                    break;
            default:
            return abort(404);
        }
        if ($printpage) {
            return view("student::print.$report.print-page", ['data' => $data]);
        }else{

        }
        return view("student::students.reports.$report", ['data' => $data]);
    }

    // public function viewPage(Request $request, $report)
    // { 
    //    dd($report);
    // }


}
