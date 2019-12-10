<?php

namespace Modules\Employee\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\BearInMind;
use Modules\Employee\Transformers\BearInMindResource;
use Modules\Employee\Http\Requests\CreateBearInMindRequest;
use Session;
class BearInMindController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $bearinminds = BearInMind::all();
        return view('employee::employees.BearinMind.index',compact('bearinminds'));
    } 

    public function bearinminds()
    {
        // return "jhgf";
        return DataTables::of(BearInMind::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($BearInMind) {
                return view('employee::colums.options', ['id' => $BearInMind->id, 'routeName' => 'bearinminds']);
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
    public function store(CreateBearInMindRequest $request)
    {
        $bearinmind=BearInMind::create([
        'note' => $request->note,
        'date' => $request->date,
        'employee_id' => $request->employee_id
        ]);
        if($bearinmind){
            Session::flash('flash_massage_type');
            return redirect()->route('bearinminds.index')->withFlashMassage('Bear in minds Created Susscefully');
        }
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new BearInMindResource(BearInMind::findOrfail($id));
        /* return view('student::show'); */
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $bearinminds=BearInMind::findOrfail($id);
        return view('employee::employees.BearinMind.edit',compact('bearinminds'));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreateBearInMindRequest $request, $id)
    {
        BearInMind::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');

        return redirect()->route('bearinminds.index')->withFlashMassage('Bear in minds updated Susscefully');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
    $bearinmind=BearInMind::findOrfail($id);
    $bearinmind->delete();
    Session::flash('flash_massage_type');
    return redirect()->route('bearinminds.index')->withFlashMassage('Bear in minds deleted Susscefully');

    }

}
