<?php

namespace Modules\Education\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Examination;
use Session;
use Modules\Education\Http\Requests\CreateExaminationRequest;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $examinations = Examination::orderBy('id', 'asc')->get();
        return view('education::examinations.index', ['examinations' => $examinations]);
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
        $examination = Examination::create($request->all());
        if($examination){
            Session::flash('flash_massage_type');
            return redirect()->route('examinations.index')->withFlashMassage('Examination Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $examinationInfo = examination::findOrFail($id);
        return view('education::examinations.show', ['examinationInfo' => $examinationInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $examinationInfo = examination::findOrFail($id);
        return view('education::examinations.edit', ['examinationInfo' => $examinationInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateExaminationRequest $request, $id)
    {
        $examinationUpdate = Examination::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('examinations.index')->withFlashMassage('Examination Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Examination $Oneexamination)
    {
      $examinationForDelete = $Oneexamination->findOrfail($id);
      $examinationForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Examination Deleted Susscefully');
    }     

}
