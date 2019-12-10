<?php

namespace Modules\Education\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Timetable;
use Session;
use Modules\Education\Http\Requests\CreateTimetableRequest;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $timetables = Timetable::orderBy('id', 'asc')->get();
        return view('education::timetables.index', ['timetables' => $timetables]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('education::create');
    }

 
    public function timeTable()
    {
        // return "jhgf";
        return DataTables::of(Timetable::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($timeTable) {
                return view('education::colums.options', ['id' => $timeTable->id, 'routeName' => 'timetables']);
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
            ->rawColumns(['last_login', 'roles', 'options', 'status', 'gender'])
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
    public function store(Request $request)
    { 
        $timetable = Timetable::create($request->all());
        if($timetable){
            Session::flash('flash_massage_type');
            return redirect()->route('timetables.index')->withFlashMassage('Timetable Created Susscefully');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $timetableInfo = timetable::findOrFail($id);
        return view('education::timetables.show', ['timetableInfo' => $timetableInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $timetableInfo = timetable::findOrFail($id);
        return view('education::timetables.edit', ['timetableInfo' => $timetableInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateTimetableRequest $request, $id)
    {
        $timetableUpdate = Timetable::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->route('timetables.index')->withFlashMassage('Timetable Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Timetable $Onetimetable)
    {
      $timetableForDelete = $Onetimetable->findOrfail($id);
      $timetableForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Timetable Deleted Susscefully');
    }     

}
