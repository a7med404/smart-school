<?php

namespace Modules\Finance\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\Operation;
use Modules\Finance\Http\Requests\CreateOperationRequest;
use Modules\Finance\Entities\Journal;
use Modules\Finance\Entities\Transaction;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $Operations = Operation::all();
        return view('finance::account.operations.index', ['Operations' => $Operations]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('finance::create'); 
    }
    
    public function operationdataTables()
    {
        return DataTables::of(Operation::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($Operation) {
                return view('Finance::calends.colums.options', ['id' => $Operation->id, 'routeName' => 'Operation.dataTables']);
            })
            // ->addColumn('last_login', function (student $student) {
            //     if($student->last_login != null) {
            //         return \Carbon\Carbon::parse($student->last_login)->diffForhumans();
            //     }
            //     return $student->last_login;
            // })
 
            // ->addColumn('roles', function ($student) {
            //     // $data = [];
            //     // foreach ($student->roles as $role) {
            //         return view('student::students.colums.role', ['roles' => $student->roles]);
            //         // $data[] = '<span class="label label-light-info">'.$role->display_name.'</span>';
            //     // }
            //     // return $data;
            // })
            // ->editColumn('status', function ($student) {
            //     return $student->status == 0 ? '<span class="label label-light-warning">' . status()[$student->status] . '</span>' : '<span class="label label-light-success">' . status()[$student->status] . '</span>';
            // })
            ->rawColumns(['last_login', 'roles', 'options', 'status'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);
 
    }
 
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateOperationRequest $request)
    {

        // dd($request->all());
        $journal = new Journal();
		$journal->status = 1;
		$journal->employee_id = Auth::guard('employee')->user()->id;
		$journal->rsc_type_id = $request->input('rsc_type_id');
		$journal->note = $request->input('note');
		$journal->date = $request->input('date');
		if ($journal->save()) {
			try {
                $transaction = Transaction::create(['journal_id'=>$journal->id, 'amount'=>$request->input('amount')])->id;
				if ($transaction) {
					try {
						$operation = new Operation();
						$operation->student_id = $request->input('student_id');
						$operation->pay_rul_id = $request->input('pay_rul_id');
						$operation->transaction_id = $transaction;
                        $operation->save();
                        Session::flash('flash_massage_type');
                        return redirect()->route('operations.index')->withFlashMassage('Operation Created Susscefully');
					} catch(\Illuminate\Database\QueryException $ex) { 	
						Transaction::where('journal_id', $journal->id)->get()->each->delete();
						Journal::find($journal->id)->get()->each->delete();
                        Session::flash('flash_massage_type', 4);
                        return redirect()->back()->withFlashMassage('SQL ERROR [OPERATION');
					}
				}
			} catch(\Illuminate\Database\QueryException $ex) { 	
				Journal::find($journal->id)->get()->each->delete();
                Session::flash('flash_massage_type', 4);
                return redirect()->back()->withFlashMassage('SQL ERROR [TRANSACTION');
			}
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
     * Show all classrooms in one Operation .
     * @param int $id
     * @return Response
     */
    public function classrooms($id)
    {
        return new ClassroomResource(Operation::findOrfail($id)->classrooms);
        /* return view('finance::show'); */
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
      return redirect()->route('operations.index')->withFlashMassage('Operation Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    // public function destroy($id, Operation $OneOperation)
    // {
    //   $OneOperation->findOrfail($id)->delete();
    //   Session::flash('flash_massage_type');
    //   return redirect()->back()->withFlashMassage('Operation Deleted Susscefully');
    // }     
    
	// public function destroy(Request $request) {
	// 	try {
	// 		DB::transaction(function () use ($request) {
	// 			Journal::where('id', $request->id)->get()->each->delete();
	// 		});
	// 	} catch (\Exception $e) {
	// 		return response()->json($e->getMessage(), 500);
	// 	}
	// 	return response()->json(['message' => __('Operation deleted successfully.')], 200);
	// }
    

}
