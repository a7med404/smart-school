<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\PayRuls;
use Modules\Student\Transformers\PayRulsResource;
use Modules\Student\Http\Requests\CreatePayRulsRequest;
class PayRulsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return PayRulsResource::collection(PayRuls::all());
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
    public function store(CreatePayRulsRequest $request)
    {
         $id= PayRuls::create($request->all())->id;    
        return response()->json([
                'message' => 'تم الحفظ بنجاح',
                'PayRuls_id' => $id
            ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new PayRulsResource(PayRuls::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new PayRulsResource(PayRuls::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayRulsRequest $request, $id)
    {
        PayRuls::findOrfail($id)->update($request->all());
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
        PayRuls::findOrfail($id)->delete();
        return response()->json([
                'message' => 'تم الحذف بنجاح',
            ], 200);
    }
 
}
