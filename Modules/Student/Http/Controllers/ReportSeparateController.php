<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\ReportSeparate;
use Modules\Student\Transformers\ReportSeparateResource;
use Modules\Student\Http\Requests\CreateReportSeparateRequest;
use Session;

class ReportSeparateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $reportSeparates = ReportSeparate::orderBy('id', 'asc')->get();
        return view('student::students.reports.report-separates.index', ['reportSeparates' => $reportSeparates]);
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
    public function store(CreateReportSeparateRequest $request)
    { 
        $reportSeparate = ReportSeparate::create($request->all());
        if($reportSeparate){
            Session::flash('flash_massage_type');
            return redirect()->back()->withFlashMassage('ReportSeparate Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $reportSeparateInfo = ReportSeparate::findOrFail($id);
        return view("student::print.report-separates.print-student-page", ['reportSeparateInfo' => $reportSeparateInfo]);
        return view('student::students.reports.report-separates.print-student-page', ['reportSeparateInfo' => $reportSeparateInfo]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function printStudentPage($id)
    {
        $reportSeparateInfo = ReportSeparate::findOrFail($id);
        return view('student::students.reports.report-separates.print-student-page', ['reportSeparateInfo' => $reportSeparateInfo]);
    }
    
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $reportSeparateInfo = ReportSeparate::findOrFail($id);
        return view('student::students.reports.report-separates.edit', ['reportSeparateInfo' => $reportSeparateInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateReportSeparateRequest $request, $id)
    {
        $reportSeparateUpdate = ReportSeparate::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('ReportSeparate Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, ReportSeparate $OnereportSeparate)
    {
      $reportSeparateForDelete = $OnereportSeparate->findOrfail($id);
      $reportSeparateForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('ReportSeparate Deleted Susscefully');
    }     

}