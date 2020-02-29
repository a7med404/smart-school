<?php

namespace Modules\ControlAffair\Http\Controllers;
use Yajra\DataTables\DataTables;
use Modules\Education\Entities\Examination;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()

    {
        $type=request()->query('type');
        $subject=request()->query('subject_id');
        $part=request()->query('part_id');
    
         $exam=Examination::where('type' ,'LIKE', "%{$type}%")
         ->SUM('ratio','+', 'subject_id')
         ->orWhere('subject_id','LIKE',"%{$subject}%")
         ->orWhere('part_id','LIKE',"%{$part}%")

         ->get();


        return view('controlaffair::controls.degree.first.first',compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('controlaffair::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('controlaffair::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('controlaffair::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
