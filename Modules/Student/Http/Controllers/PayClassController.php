<?php

namespace Modules\Student\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\PayClass;
use Modules\Student\Transformers\PayClassResource;
use Modules\Student\Http\Requests\CreatePayClassRequest;
class PayClassController extends Controller
{
     /**
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $PayClases = PayClass::all();
        return view('student::students.account.pay-class.index', ['PayClases' => $PayClases]);
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
    public function store(CreatePayClassRequest $request)
    {
        $PayClases= PayClass::create($request->all());

               

        if($PayClases){

            Session::flash('flash_massage_type');
            return redirect()->route('pay-classes.index')->withFlashMassage('PayClass Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $PayClassInfo = PayClass::findOrFail($id);
        return view('student::students.account.pay-class.show', ['PayClassInfo' => $PayClassInfo]);
    }
    /**
     * Show all classrooms in one PayClass .
     * @param int $id
     * @return Response
     */
    public function classrooms($id)
    {
        return new ClassroomResource(PayClass::findOrfail($id)->classrooms);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $PayClassInfo = PayClass::findOrFail($id);
        return view('student::students.account.pay-class.edit', ['PayClassInfo' => $PayClassInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayClassRequest $request, $id)
    {
      $updatePayClass = PayClass::findOrfail($id)->update($request->all());
      
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('PayClass Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, PayClass $OnePayClass)
    {
      $PayClassForDelete = $OnePayClass->findOrfail($id);
      $PayClassForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('PayClass Deleted Susscefully');
    }      
 
}
