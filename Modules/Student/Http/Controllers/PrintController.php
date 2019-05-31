<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Level;
use PDF;

class PrintController extends Controller
{
    public function printPage($page) 
    {
        $data = [];
        switch($page){
            case 'levels':
                $data = Level::where('id', '<', 7)->get();
                break;
            case 'tests':
                $data = \DB::table('levels')->get();
                break;
            case 'report_separates':
                $data = \DB::table('report_separates')->all();
                break;
            default:
            return abort(404);
                break;
        }
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
