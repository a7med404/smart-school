<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\RewardsPunition;
use Modules\Employee\Transformers\RewardsPunitionResource;
use Modules\Employee\Http\Requests\CreateRewardsPunitionRequest;
use Session;
class RewardsPunitionController extends Controller
{

    public function index()
    {
        $rewards = RewardsPunition::all();
        return view('employee::employees.salary.rewards-punition.index', ['rewards' => $rewards]);
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
    public function store(CreateRewardsPunitionRequest $request)
    {
        $reward = RewardsPunition::create($request->all());
         if($reward){
            Session::flash('flash_massage_type');
             return redirect()->route('rewards-punition.index')->withFlashMassage('Rewards Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $Infos= RewardsPunition::findOrFail($id);
        return view('employee::employees.salary.rewards-punition.show', ['Infos' => $Infos]);
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
        $rewards =RewardsPunition::findOrFail($id);
        return view('employee::employees.salary.rewards-punition.edit', ['rewards' => $rewards]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayRulsRequest $request, $id)
    {
        RewardsPunition::findOrfail($id)->update($request->all());
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
        $payrul = RewardsPunition::findOrFail($id)->delete();
        Session::flash('flash_massage_type');
        return redirect()->route('rewards-punition.index')->withFlashMassage('rewards Deleted Susscefully');
    }



}
