<?php

namespace Modules\Address\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Address\Entities\Identifcation;
use Modules\Address\Transformers\IdentifcationResource;
use Modules\Address\Transformers\SingleIdentifcationResource;
use Modules\Address\Http\Requests\CreateIdentifcationRequest;
use Illuminate\Support\Facades\Session;

class IdentifcationController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Identifcation $identifcation){
        $allUsers = $identifcation->all();
        return view('address::identifcations.index', ['identifcations' => $allUsers]);
        return new IdentifcationResource(Identifcation::all());
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
    public function store(CreateIdentifcationRequest $request)
    {
        $data = [
            'type'                      => $request->type,
            'issue_date'                => $request->issue_date,
            'identifcation_number'      => $request->identifcation_number,
            'issue_place'               => $request->issue_place,
            'identifcationable_id'      => $request->identifcationable_id,
            'identifcationable_type'    => $request->identifcationable_type,
        ];
        $student = Identifcation::create($request->all());
        // Identifcation::create($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Identifcation Added Susscefully');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SingleIdentifcationResource(Identifcation::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $identifcationInfo = Identifcation::findOrfail($id);
        return view('address::identifcations.edit',['identifcationInfo' => $identifcationInfo]);
        // return redirect()->route("companies.show", ['id' => $identifcationInfo->identifcationable_id])->with(['identifcationInfo' => $identifcationInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateIdentifcationRequest $request, $id)
    {
        $data = [
            'type'                      => $request->type,
            'issue_date'                => $request->issue_date,
            'identifcation_number'      => $request->identifcation_number,
            'issue_place'               => $request->issue_place,
            'identifcationable_id'      => $request->identifcationable_id,
            'identifcationable_type'    => $request->identifcationable_type,
        ];
        Identifcation::findOrfail($id)->update($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Identifcation Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Identifcation $oneIdentifcation)
    {
      $identifcationForDelete = $oneIdentifcation->findOrfail($id);
      $identifcationForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Identifcation Deleted Susscefully');
    }



}
