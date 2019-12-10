<?php

namespace Modules\Finance\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\PayRuls;
use Modules\Finance\Transformers\PayRulsResource;
use Modules\Finance\Http\Requests\CreatePayRulsRequest;
use Session;

class PayRulsController extends Controller
{
    public function index()
    {
        $payruls = PayRuls::all();
        return view('finance::account.pay-ruls.index ', ['payruls' => $payruls]);
    }

    public function RulsDataTables()
    {
        // return "jhgf";
        return DataTables::of(PayRuls::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($payrul) {
                return view('finance::account.colums.options', ['id' => $payrul->id, 'routeName' => 'pay-rules']);
            // })

            // ->editColumn('is_mandatary', function ($customer) {
            //     return $customer->is_mandatary == 0 ? '<span class="label label-success">' . getGender()[$customer->gender] . '</span>' : '<span class="label label-warning">' . getGender()[$customer->gender] . '</span>';
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
    public function payTable()
    {
        return DataTables::of(PayRuls::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($payruls) {
                return view('Finance::calends.colums.options', ['id' => $payruls->id, 'routeName' => 'pay_rules.dataTables']);
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
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('finance::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreatePayRulsRequest $request)
    {
        $payrul = PayRuls::create($request->all());
         if($payrul){
            Session::flash('flash_massage_type');
             return redirect()->route('pay-rules.index')->withFlashMassage('PayRuls Created Susscefully');
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $Infos= PayRuls::findOrFail($id);
        return view('finance::account.pay-ruls.show', ['Infos' => $Infos]);
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
        $payrulInfo = PayRuls::findOrFail($id);
        return view('finance::account.pay-ruls.edit', ['payrulInfo' => $payrulInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayRulsRequest $request, $id)
    {
        PayRuls::findOrfail($id)->update($request->all());
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
        $payrul = PayRuls::findOrFail($id)->delete();
        Session::flash('flash_massage_type');
        return redirect()->route('pay-rules.index')->withFlashMassage('PayRuls Deleted Susscefully');
    }


}
