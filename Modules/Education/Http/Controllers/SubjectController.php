<?php

namespace Modules\Education\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Subject;
use Modules\Student\Entities\Part;
use Illuminate\Support\Facades\Session;
use Modules\Education\Http\Requests\CreateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('id', 'asc')->get();
        return view('education::subjects.index', ['subjects' => $subjects]);
    }

    public function subjectdataTable()
    {
        // return "jhgf";
        return DataTables::of(Subject::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($subject) {
                return view('education::colums.options', ['id' => $subject->id, 'routeName' => 'subjects']);
            // })

            // ->editColumn('gender', function ($customer) {
            //     return $customer->gender == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
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
             ->editColumn('part_id', function ($part) {
                return $part->part->name;
            })
            // ->editColumn('classroom_id', function ($class) {
            //     return $class->classroom->name;
            // })
            ->rawColumns(['last_login', 'roles', 'options', 'status', 'part_id'])
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
        return view('education::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $subject = Subject::create($request->all());
        if($subject){
            Session::flash('flash_massage_type');
            return redirect()->route('subjects.index')->withFlashMassage('تم الاضافة بنجاح');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $subjectInfo = subject::findOrFail($id);
        return view('education::subjects.show', ['subjectInfo' => $subjectInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $subjectInfo = subject::findOrFail($id);
        return view('education::subjects.edit', ['subjectInfo' => $subjectInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateSubjectRequest $request, $id)
    {
        $subjectUpdate = Subject::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('timetables.index')->withFlashMassage('تم تحديث البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Subject $Onesubject)
    {
      $subjectForDelete = $Onesubject->findOrfail($id);
      $subjectForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم حذف البيانات بنجاح');
    }


}
