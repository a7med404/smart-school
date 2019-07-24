<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Health;
use Modules\Student\Transformers\HealthResource;
use Modules\Student\Transformers\SingleHealthResource;
use Modules\Student\Http\Requests\CreateHealthRequest;
use Session;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return HealthResource::collection(Health::all());
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
    public function store(CreateHealthRequest $request)
    {
        $data = [
            'doctor_name'            => $request->doctor_name,
            'doctor_number'          => $request->doctor_number,
            'blood_type'             => $request->blood_type,
            'insurance_number'       => $request->insurance_number,
            'health_status'          => $request->health_status,
            'student_id'             => $request->student_id,
        ];
        $Health = Health::create($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Health Added Susscefully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SingleHealthResource(Health::findOrfail($id));
        /* return view('student::show'); */ 
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $healthInfo = Health::findOrfail($id);
        return view('student::students.healthes.edit',['healthInfo' => $healthInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateHealthRequest $request, $id)
    {
        $data = [
            'doctor_name'            => $request->doctor_name,
            'doctor_number'          => $request->doctor_number,
            'blood_type'             => $request->blood_type,
            'insurance_number'       => $request->insurance_number,
            'health_status'          => $request->health_status,
        ];
        $studentId = Health::findOrfail($id)->update($data);
        Session::flash('flash_massage_type');
        return redirect()->route('students.show',['id' => $request->student_id])->withFlashMassage('Health Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Health::findOrfail($id)->delete();
        return response()->json(['message' => 'تم الحذف بنجاح'], 200);
    }
}
