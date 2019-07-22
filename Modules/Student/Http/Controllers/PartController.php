<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Part;
use Modules\Student\Transformers\PartResource;
use Modules\Student\Http\Requests\CreatePartRequest;
use Session;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $parts = Part::orderBy('sort', 'asc')->get();
        return view('student::students.educations.parts.index', ['parts' => $parts]);
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
    public function store(Request $request)
    { 
        $part = Part::create($request->all());
        if($part){
            Session::flash('flash_massage_type');
            return redirect()->route('parts.index')->withFlashMassage('Part Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $partInfo = part::findOrFail($id);
        return view('student::students.educations.parts.show', ['partInfo' => $partInfo]);
    }
    /**
     * Show parts in one part.
     * @param int $id
     * @return Response
     */
    public function parts($id)
    {
        return new PartResource(Part::findOrfail($id)->parts);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $partInfo = part::findOrFail($id);
        return view('student::students.educations.parts.edit', ['partInfo' => $partInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreatePartRequest $request, $id)
    {
        $partUpdate = Part::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Part Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Part $Onepart)
    {
      $partForDelete = $Onepart->findOrfail($id);
      $partForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Part Deleted Susscefully');
    }     


    public function getParts($part_id)
    {
        return new PartResource(Part::where('part_id', $part_id)->orderBy('sort', 'asc')->get());
        // return response()->json(['message' => 'تم الحذف بنجاح'], 200);
    }

}
