<?php

namespace Modules\Student\Http\Controllers;
use Yajra\DataTables\DataTables;
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
        return view('student::students.offprints.student-transfer.index', ['studentTransfers' => $studentTransfers]);
    }
    public function StudentTransferDataTables()
    {
        // return "jhgf";
        return DataTables::of(StudentTransfer::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($student) {
                return view('student::students.colums.options', ['id' => $student->id, 'routeName' => 'student-transfers']);
            })

            ->editColumn('gender', function ($customer) {
                return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
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
            // ->editColumn('level_id', function ($student) {
            //     return $student->level->name;
            // })
            // ->editColumn('classroom_id', function ($student) {
            //     return $student->classroom->name;
            // })
             ->editColumn('student_id', function ($student) {
                return $student->student->name;
            })
            ->rawColumns(['last_login', 'student_id', 'options', 'status', 'gender'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

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
             return redirect()->route('student-transfers.index')->withFlashMassage('تم اضافة البيانات بنجاح');
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
        return redirect()->route('student-transfers.index')->withFlashMassage('تم الحذف  بنجاح');
    }
}
