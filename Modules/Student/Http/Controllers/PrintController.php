<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Level;
use Modules\Student\Entities\Student;
use Modules\Student\Entities\Offprint;
use Modules\Student\Entities\Permissiontodepart;
use Modules\Student\Entities\Attendance;
use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\Part;
use PDF;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function printPage($page, Request $request) 
    {
        $data = [];
        switch($page){
            case 'levels':
                if($request->has('id')){
                    $requestAll = $request->toArray();
                    $query = DB::table('levels')->select('*');
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
            case 'tests':
                $data = \DB::table('levels')->get();
                break;
            case 'report-separates':
                $data = \DB::table('report_separates')->get();
                break;
            case 'report-emp-student':
                $data = Student::where('is_staff_son', 1)->get();
                break;
            case 'report-warnings':
                $data = \DB::table('report_warnings')->get();
                break;
            case 'report-school-register':
            dd($request->all());
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
            case 'report-kindness':
                $data = Offprint::where('type', 1)
                ->orWhere('date','>' ,2019-06-12)
                ->orWhere('date','<',2019-06-20)
                ->orWhere('student_id',1)
                ->get();
                break;
            case 'report-student-permission':
                $data = Permissiontodepart::
                whereBetween('date', [2019-06-10, 2019-06-20])
                ->orWhere('student_id',1)
                ->get();
                break;
            case 'report-student-absece':
                $data = Attendance::
                whereBetween('date', [2019-06-12, 2019-06-20])
                ->get();
                break;
            case 'report-levels':
                $data = Level::where('name', 'oad')->get();
                break;
            case 'report-data-classrooms':
                $data = Student::where('level_id', 1)
                ->orWhere('classroom_id' , 1)
                ->orWhere('gender', 1)
                ->get();
                break;
            case 'report-parts':
                $data = Student::where('level_id', 1)
                ->orWhere('classroom_id' , 1)
                ->orWhere('part_id' , 1)
                ->orWhere('gender', 1)
                ->get();
                break;
            case 'report-without-part':
                $data = Student::where('part_id', NULL)->get();
                break;
            case 'report-count-parts':
                $data = Part::all();
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
            default:
            return abort(404);
        }
        // $pdf = PDF::loadView("student::print.$page.print-page", ['data' => $data]);
        // // dd($pdf);
        // return $pdf->stream($page, '.pdf');
        // return $pdf->download($page.'.pdf');

        return view("student::print.$page.print-page", ['data' => $data]);
    }    







    public function print()
    {

        $data = Level::all();
        return view('student::print.tests.print-page', ['data' => $data]);
        $pdf  = PDF::loadView('student::print.tests.print-page', ['data' => $data])->setPaper('a4', 'portrail');
        // $pdf  = PDF::loadHTML('<h1>'.$level.'</h1>')->setPaper('a4', 'portrail');
        $fileName = 'data';//$data->name;
        return $pdf->stream($fileName, '.pdf');
    }

    public function downloadPDF()
    {
        $data = Level::all();
        $pdf = PDF::loadView('student::print.tests.print', ['data' => $data]);
        $fileName = 'data';//$level->name;
        return $pdf->download($fileName.'.pdf');
    }

    public function printPDF()
    {
        $data = Level::all();
        $pdf  = PDF::loadView('student::print.tests.print', ['data' => $data])->setPaper('a4', 'portrail');
        // $pdf  = PDF::loadHTML('<h1>'.$level.'</h1>')->setPaper('a4', 'portrail');
        $fileName = 'data';//$data->name;
        return $pdf->stream($fileName, '.pdf');
    }
}
