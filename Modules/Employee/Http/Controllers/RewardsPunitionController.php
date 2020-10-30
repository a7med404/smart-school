<?php

namespace Modules\Employee\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\RewardsPunition;
use Modules\Employee\Entities\Managament;
use Modules\Employee\Entities\Department;
use Modules\Employee\Entities\Employee;
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



    public function rewardsDataTable()
    {
        // return "jhgf";
        return DataTables::of(RewardsPunition::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($rewards) {
                return view('student::students.colums.options', ['id' => $rewards->id, 'routeName' => 'rewards-punition']);
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
            //  ->editColumn('management_id', function ($st) {
            //      return $st->managament->name;
            // })
        //     ->editColumn('department_id', function ($dep) {
        //         return $dep->department->name;
        //    })
           ->editColumn('employee_id', function ($emp) {
            return $emp->employee->full_name;
       })

            //  ->editColumn('part_id', function ($student) {
            //     return $student->part->name;
            // })
            ->rawColumns(['last_login', 'management_id','department_id', 'options', 'status', 'employee_id'])
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
    public function store(CreateRewardsPunitionRequest $request)
    {
        $reward = RewardsPunition::create($request->all());
         if($reward){
            Session::flash('flash_massage_type');
             return redirect()->route('rewards-punition.index')->withFlashMassage('تم الاضافة بنجاح');
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
    public function update(CreateRewardsPunitionRequest $request, $id)
    {
        RewardsPunition::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('تم التحديث بنجاح');
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
        return redirect()->route('rewards-punition.index')->withFlashMassage('تم الحذف بنجاح');
    }



}
