<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Routing\Controller;
use Modules\Student\Entities\PayRuls;
use Modules\Student\Transformers\PayRulsResource;
use Modules\Student\Http\Requests\CreatePayRulsRequest;
use Session;

class PayRulsController extends Controller
{
    public function index()
    {
        $payruls = PayRuls::all();
        return view('student::students.account.pay-ruls.index ', ['payruls' => $payruls]);
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
    public function store(CreatePayRulsRequest $request)
    {
        $payrul = PayRuls::create($request->all());
         if($payrul){
            Session::flash('flash_massage_type');
             return redirect()->route('pay-rules.index')->withFlashMassage('PayRuls Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $Infos= PayRuls::findOrFail($id);
        return view('student::students.account.pay-ruls.show', ['Infos' => $Infos]);
    }
    /**
     * Show all classrooms in one payrul .
     * @param int $id
     * @return Response
     */


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $payrulInfo = PayRuls::findOrFail($id);
        return view('student::students.account.pay-ruls.edit', ['payrulInfo' => $payrulInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayRulsRequest $request, $id)
    {
        PayRuls::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('pay-rules.index')->withFlashMassage('PayRuls Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $payrul = PayRuls::findOrFail($id)->delete();
        Session::flash('flash_massage_type');
        return redirect()->route('pay-rules.index')->withFlashMassage('PayRuls Deleted Susscefully');
    }


}
