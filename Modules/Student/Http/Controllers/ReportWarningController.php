<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\ReportWarning;
use Modules\Student\Transformers\ReportWarningResource;
use Modules\Student\Http\Requests\CreateReportWarningRequest;
use Session;
class ReportWarningController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $reportWarnings = ReportWarning::orderBy('id', 'asc')->get();
        return view('student::students.reports.report-warnings.index', ['reportWarnings' => $reportWarnings]);
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
    public function store(CreateReportWarningRequest $request)
    { 
        $reportWarning = ReportWarning::create($request->all());
        if($reportWarning){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('ReportWarning Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $reportWarningInfo = ReportWarning::findOrFail($id);
        return view('student::students.reports.report-warnings.show', ['reportWarningInfo' => $reportWarningInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $reportWarningInfo = ReportWarning::findOrFail($id);
        return view('student::students.reports.report-warnings.edit', ['reportWarningInfo' => $reportWarningInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateReportWarningRequest $request, $id)
    {
        $reportWarningUpdate = ReportWarning::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('ReportWarning Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, ReportWarning $OnereportWarning)
    {
      $reportWarningForDelete = $OnereportWarning->findOrfail($id);
      $reportWarningForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('ReportWarning Deleted Susscefully');
    }     

}
