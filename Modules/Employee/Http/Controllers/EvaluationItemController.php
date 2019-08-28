<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EvaluationItem;
use Modules\Employee\Transformers\EvaluationItemResource;
use Modules\Employee\Http\Requests\CreateEvaluationItemRequest;
class EvaluationItemController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Responseh
     */
    public function index()
    {
        $evaluationItem = EvaluationItem::all();

        return view('employee::employees.evaluation.evaluationItem.index',['evaluationItems' => $evaluationItem]);
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
   public function store(CreateEvaluationItemRequest $request)
   {
       $evaluationIitem = EvaluationItem::create($request->all());

       if($evaluationIitem){

           Session::flash('flash_massage_type');
           return redirect()->route('evaluation-items')->withFlashMassage('evaluationIitem Created Susscefully');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $evaluationItemInfo = EvaluationItem::findOrFail($id);
       return view('employee::.employees.evaluation.evaluationItem.show', ['evaluationItemInfo' => $evaluationItemInfo]);
   }
   /**
    * Show all classrooms in one evaluatioIitem .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(EvaluationItem::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $evaluationItemInfo = EvaluationItem::findOrFail($id);
       return view('employee::employees.evaluation.evaluationItem.edit', ['evaluationItemInfo' => $evaluationItemInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateEvaluationItemRequest $request, $id)
   {
     $updateevaluationItem = EvaluationItem::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('evaluationItem Updated Susscefully');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, evaluationItem $OneevaluationItem)
   {
     $evaluationItemForDelete = $OneevaluationItem->findOrfail($id);
     $evaluationItemForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('evaluationItem Deleted Susscefully');
   }      
}
