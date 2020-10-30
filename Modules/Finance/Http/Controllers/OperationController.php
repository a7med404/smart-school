<?php

namespace Modules\Finance\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\Operation;
use Modules\Finance\Http\Requests\CreateOperationRequest;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $Operations = Operation::orderBy('id', 'desc')->get();
        return view('finance::account.operations.index', ['operations' => $Operations]);
    }

    public function showTransactions()
    {
        $operations = Operation::orderBy('id', 'ASC')->get();
        return view('finance::account.operations.show-operations', ['operations' => $operations]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateOperationRequest $request)
    {
            try {

                $operation = new Operation();
                $operation->student_id = $request->input('student_id');
                $operation->pay_rul_id = $request->input('pay_rul_id');
                $operation->amount = $request->amount;
                $operation->status = 1;
                $operation->note = $request->note;
                $operation->date = $request->date;
                $operation->employee_id = Auth::guard('employee')->user()->id;
                $operation->rsc_type_id = $request->rsc_type_id;
                $operation->save();

                Session::flash('flash_massage_type');
                return redirect()->route('operations.index')->withFlashMassage('Operation Created Susscefully');
            } catch(\Illuminate\Database\QueryException $ex) {
                Session::flash('flash_massage_type', 4);
                return redirect()->back()->withFlashMassage('SQL ERROR [OPERATION');
            }


    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $OperationInfo = Operation::findOrFail($id);
        return view('finance::account.operations.show', ['OperationInfo' => $OperationInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $OperationInfo = Operation::findOrFail($id);
        return view('finance::account.operations.edit', ['OperationInfo' => $OperationInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateOperationRequest $request, $id)
    {
      Operation::findOrfail($id)->update($request->all());
      Session::flash('flash_massage_type');
      return redirect()->route('operations.index')->withFlashMassage('تم  الاضافة بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Operation $OneOperation)
    {
      $OneOperation->findOrfail($id)->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
    }

}
