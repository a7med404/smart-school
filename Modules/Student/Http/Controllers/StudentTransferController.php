<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\StudentTransfer;
use Modules\Student\Http\Requests\CreateStudentTransferRequest;
use Session;

class StudentTransferController extends Controller
{
    public function index()
    {
        $studentTransfers = StudentTransfer::all();
        return view('student::students.offprints.student-transfer.index ', ['studentTransfers' => $studentTransfers]);
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
    public function store(CreateStudentTransferRequest $request)
    {
        $studentTransfer = StudentTransfer::create($request->all());
         if($studentTransfer){
            Session::flash('flash_massage_type');
             return redirect()->route('student-transfers.index')->withFlashMassage('StudentTransfer Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $Infos= StudentTransfer::findOrFail($id);
        return view('student::students.offprints.student-transfer.show', ['Infos' => $Infos]);
    }
    /**
     * Show all classrooms in one studentTransfer .
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
        $studentTransferInfo = StudentTransfer::findOrFail($id);
        return view('student::students.offprints.student-transfer.edit', ['studentTransferInfo' => $studentTransferInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateStudentTransferRequest $request, $id)
    {
        StudentTransfer::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('student-transfers.index')->withFlashMassage('StudentTransfer Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $studentTransfer = StudentTransfer::findOrFail($id)->delete();
        Session::flash('flash_massage_type');
        return redirect()->route('student-transfers.index')->withFlashMassage('StudentTransfer Deleted Susscefully');
    }
}
