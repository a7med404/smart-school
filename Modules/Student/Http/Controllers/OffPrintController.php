<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\OffPrint;
use Modules\Student\Transformers\OffPrintResource;
use Modules\Student\Http\Requests\CreateOffPrintRequest;
use Modules\Student\Entities\Student;
use PDF;

class OffPrintController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->type) {
            return OffPrintResource::collection(OffPrint::where('type', $request->type)->get());
        } else {
            return OffPrintResource::collection(OffPrint::all());
        }
    }

    public function getOffPrints(Request $request, $type)
    {
        if ($type) { 
            $data = OffPrint::where('type', $request->type)->get();
            // dd($data);
            return view("student::students.offprints.$type", ['data' => $data]);
        } else {
            return OffPrintResource::collection(OffPrint::all());
        }
    }


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateOffPrintRequest $request)
    {
        OffPrint::create($request->all());
        $data = Student::findOrfail($request->student_id);
        return view("student::students.offprints.prints.$request->type", ['data' => $data]);
    }

    public function print($student, $type)
    {
        $data = Student::findOrfail($student);
        // $pdf  = PDF::loadView("student::students.offprints.prints.$type", ['data' => $data])->setPaper('a4', 'portrail');
        // $pdf  = PDF::loadHTML('<h1>'.$data.'</h1>')->setPaper('a4', 'portrail');
        // return $pdf;
        return view("student::students.offprints.prints.$type", ['data' => $data]);
        // return $pdf->stream($type, '.pdf');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateOffPrintRequest $request, $id)
    {
        OffPrint::findOrfail($id)->update($request->all());
        return response()->json([
            'message' => 'تم التحديث بنجاح',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        OffPrint::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }
}
