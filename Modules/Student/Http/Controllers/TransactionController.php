<?php

namespace Modules\Student\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Transaction;
use Modules\Student\Http\Requests\CreateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $Transactions = Transaction::all();
        return view('student::students.account.transactions.index', ['Transactions' => $Transactions]);
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
    public function store(CreateTransactionRequest $request)
    {
        $Transactions= Transaction::create($request->all());

        if($Transactions){
            Session::flash('flash_massage_type');
            return redirect()->route('transactions.index')->withFlashMassage('Transaction Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $TransactionInfo = Transaction::findOrFail($id);
        return view('student::students.account.transactions.show', ['TransactionInfo' => $TransactionInfo]);
    }
    /**
     * Show all classrooms in one Transaction .
     * @param int $id
     * @return Response
     */
    public function classrooms($id)
    {
        return new ClassroomResource(Transaction::findOrfail($id)->classrooms);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $TransactionInfo = Transaction::findOrFail($id);
        return view('student::students.account.transactions.edit', ['TransactionInfo' => $TransactionInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateTransactionRequest $request, $id)
    {
      Transaction::findOrfail($id)->update($request->all());
      Session::flash('flash_massage_type');
      return redirect()->route('transactions.index')->withFlashMassage('Transaction Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Transaction $OneTransaction)
    {
      $OneTransaction->findOrfail($id)->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Transaction Deleted Susscefully');
    }      

}
