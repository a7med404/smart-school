<?php

namespace Modules\Student\Http\Controllers;
use \DB;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Part;
use Modules\Student\Transformers\PartResource;
use Modules\Student\Http\Requests\CreatePartRequest;
use Session;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $parts = Part::orderBy('sort', 'asc')->get();
        return view('student::students.educations.parts.index', ['parts' => $parts]);
    }

    public function partTable()
    {
        // return "jhgf";
        return DataTables::of(Part::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($part) {
                return view('student::students.educations.parts.options', ['id' => $part->id, 'routeName' => 'parts']);
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
             ->editColumn('level_id', function ($student) {
                return $student->level->name;
            })
            ->editColumn('classroom_id', function ($class) {
                return $class->classroom->name;
            })
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
    public function store(Request $request)
    {
        $part = Part::create($request->all());
        if($part){
            Session::flash('flash_massage_type');
            return redirect()->route('parts.index')->withFlashMassage('تم الاضافة بنجاح');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $partInfo = part::findOrFail($id);
        return view('student::students.educations.parts.show', ['partInfo' => $partInfo]);
    }
    /**
     * Show parts in one part.
     * @param int $id
     * @return Response
     */
    public function parts($id)
    {
        return new PartResource(Part::findOrfail($id)->parts);
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $partInfo = part::findOrFail($id);
        return view('student::students.educations.parts.edit', ['partInfo' => $partInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Responsedestroy
     */
    public function update(CreatePartRequest $request, $id)
    {
        $partUpdate = Part::findOrfail($id)->update($request->all());
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('تم التحديث بالنجاح');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Part $Onepart)
    {
      $partForDelete = $Onepart->findOrfail($id);
      $partForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
    }


    public function getParts($part_id)
    {
        return new PartResource(Part::where('part_id', $part_id)->orderBy('sort', 'asc')->get());
        // return response()->json(['message' => 'تم الحذف بنجاح'], 200);
    }

}
