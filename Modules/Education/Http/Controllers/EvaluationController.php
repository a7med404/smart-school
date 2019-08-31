<?php

namespace Modules\Education\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Evaluation;
use Session;
use Modules\Education\Http\Requests\CreateEvaluationRequest;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $evaluations = Evaluation::orderBy('id', 'asc')->get();
        return view('education::evaluations.index', ['evaluations' => $evaluations]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('education::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    { 
        $evaluation = Evaluation::create($request->all());
        if($evaluation){
            Session::flash('flash_massage_type');
            return redirect()->route('evaluations.index')->withFlashMassage('Evaluation Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $evaluationInfo = evaluation::findOrFail($id);
        return view('education::evaluations.show', ['evaluationInfo' => $evaluationInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $evaluationInfo = evaluation::findOrFail($id);
        return view('education::evaluations.edit', ['evaluationInfo' => $evaluationInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateEvaluationRequest $request, $id)
    {
        $evaluationUpdate = Evaluation::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('evaluations.index')->withFlashMassage('Evaluation Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Evaluation $Oneevaluation)
    {
      $evaluationForDelete = $Oneevaluation->findOrfail($id);
      $evaluationForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Evaluation Deleted Susscefully');
    }     

}
