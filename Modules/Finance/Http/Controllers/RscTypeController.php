<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\RscType;
use Modules\Finance\Http\Requests\CreateRscTypeRequest;
use Modules\Finance\Transformers\ClassroomResource;
use PDF;
use \Session;

class RscTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $rscTypes = RscType::all();
        return view('finance::account.rsc-types.index', ['rscTypes' => $rscTypes]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('finance::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateRscTypeRequest $request)
    {
        $request->deletable = ($request->deletable == null) ? false : true;
        // dd($request->deletable, $request->all());
        $data = [
            'name' => $request->name,
            'deletable' => $request->deletable,
            'note' => $request->note,
        ];
        $rscType = RscType::create($data);
        if($rscType){
            Session::flash('flash_massage_type');
            return redirect()->route('rsc-types.index')->withFlashMassage('RscType Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $rscTypeInfo = rscType::findOrFail($id);
        return view('finance::account.rsc-types.show', ['rscTypeInfo' => $rscTypeInfo]);
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $rscTypeInfo = rscType::findOrFail($id);
        return view('finance::account.rsc-types.edit', ['rscTypeInfo' => $rscTypeInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateRscTypeRequest $request, $id, RscType $OnerscType)
    {
      $rscTypeUpdate = $OnerscType->findOrFail($id);
      $request->deletable = ($request->deletable == null) ? false : true;
      $data = [
          'name' => $request->name,
          'deletable' => $request->deletable,
          'note' => $request->note,
      ];
      $rscTypeUpdate->fill($data)->save();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('RscType Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, RscType $OnerscType)
    {
      $rscTypeForDelete = $OnerscType->findOrfail($id);
      if ($rscTypeForDelete->deletable == false) {
        return redirect()->back()->withFlashMassage('You Can\'t Delete this');
      }
      $rscTypeForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('RscType Deleted Susscefully');
    }      


}
