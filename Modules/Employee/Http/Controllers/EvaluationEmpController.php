<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EvaluationEmp;
use Modules\Employee\Transformers\EvaluationEmpResource;
use Modules\Employee\Http\Requests\CreateEvaluationEmpRequest;
class EvaluationEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $evaluationEmp = EvaluationEmp::all();

        return view('employee::employees.evaluation.evaluationemp.index',['evaluationEmps' => $evaluationEmp]);
    }
 
   public function create()
   {
       return view('employee::create');
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Response
    */
   public function store(CreateevaluationEmpRequest $request)
   {
       $evaluationemp = EvaluationEmp::create($request->all());

       if($evaluationemp){

           Session::flash('flash_massage_type');
           return redirect()->back()->withFlashMassage('evaluationemp Created Susscefully');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $evaluationEmpInfo = EvaluationEmp::findOrFail($id);
       return view('employee::.employees.evaluation.evaluationemp.show', ['evaluationEmpInfo' => $evaluationEmpInfo]);
   }
   /**
    * Show all classrooms in one evaluatioIitem .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(EvaluationEmp::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $evaluationEmpInfo = EvaluationEmp::findOrFail($id);
       return view('employee::employees.evaluation.evaluationemp.edit', ['evaluationEmpInfo' => $evaluationEmpInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateevaluationEmpRequest $request, $id)
   {
     EvaluationEmp::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('evaluationEmp Updated Susscefully');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, evaluationEmp $OneevaluationEmp)
   {
     $evaluationEmpForDelete = $OneevaluationEmp->findOrfail($id);
     $evaluationEmpForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('evaluationEmp Deleted Susscefully');
   }      
}
