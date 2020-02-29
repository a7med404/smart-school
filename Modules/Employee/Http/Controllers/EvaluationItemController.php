<?php

namespace Modules\Employee\Http\Controllers;

use Session;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\EvaluationItem;
use Modules\Employee\Transformers\EvaluationItemResource;
use Modules\Employee\Http\Requests\CreateEvaluationItemRequest;
class EvaluationItemController extends Controller
{
     /**
     * Display a listing of the resource.
     * @return Responseh
     */
    public function index()
    {
        $evaluationItem = EvaluationItem::all();

        return view('employee::employees.evaluation.evaluationItem.index',['evaluationItems' => $evaluationItem]);
    }

    public function EvaluationDataTables()
    {
        // return "jhgf";
        return DataTables::of(EvaluationItem::orderBy('id', 'desc')->get())
            ->addColumn('options', function ($evaluationItem) {
                return view('employee::employees.colums.options', ['id' => $evaluationItem->id, 'routeName' => 'evaluation-items']);
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
            //  ->editColumn('part_id', function ($student) {
            //     return $student->part->name;
            // })
            ->rawColumns(['last_login', 'level_id', 'options', 'status', 'gender'])
            // ->removeColumn('password')
            // ->setRowClass('{{ $status == 0 ? "alert alert-success" : "alert alert-warning" }}')
            ->setRowId('{{$id}}')
            ->make(true);

    }


   public function create()
   {
       return view('employee::create');
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Response
    */
   public function store(CreateEvaluationItemRequest $request)
   {
       $evaluationIitem = EvaluationItem::create($request->all());

       if($evaluationIitem){

           Session::flash('flash_massage_type');
           return redirect()->route('evaluation-items')->withFlashMassage('تم الاضافة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $evaluationItemInfo = EvaluationItem::findOrFail($id);
       return view('employee::.employees.evaluation.evaluationItem.show', ['evaluationItemInfo' => $evaluationItemInfo]);
   }
   /**
    * Show all classrooms in one evaluatioIitem .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(EvaluationItem::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $evaluationItemInfo = EvaluationItem::findOrFail($id);
       return view('employee::employees.evaluation.evaluationItem.edit', ['evaluationItemInfo' => $evaluationItemInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateEvaluationItemRequest $request, $id)
   {
     $updateevaluationItem = EvaluationItem::findOrfail($id)->update($request->all());

     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم تحديث البيانات  بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, evaluationItem $OneevaluationItem)
   {
     $evaluationItemForDelete = $OneevaluationItem->findOrfail($id);
     $evaluationItemForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم الحذف بنجاح');
   }
}
