<?php

namespace Modules\Education\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Examination;
use Modules\Student\Entities\Level;
use Modules\Student\Entities\Part;
use Modules\Education\Entities\Subject;
use Modules\Student\Entities\Student;
use Modules\ControlAffair\Entities\Estimate;
use Session;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $search=request()->input('part_id');
        $std=request()->query('part_id');

        $level=Part::where('id',$search);
        $student=collect(Examination::where('part_id',$std)->get());
        $studentuniq=$student->unique('student_id');
        $studentuniq->values()->all();
        return view('education::degree.index',compact('studentuniq'))
        ->with('level',$level)
        ;
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

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($studentid)
    {
        $st=Estimate::all();
        $ex=Examination::where('student_id',$studentid)->get();
        $fine=Student::where('part_id',$studentid)->get();

        $exam=Examination::find($studentid);
        $f=Examination::where('part_id',$studentid)->get();
        $ful=Subject::findOrFail($fine);
        return view('education::degree.show',compact('exam'))
        ->with('ex',$ex)
        ->with('ful',$ful)
        ->with('st',$st)
        ;
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('education::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $std=Student::find($id);
        $degree=$request->degree;
        $full=280;
        if($degree <=$full)
        {
        $std=Student::find($id);
        switch($std->part_id)
        {

            case 1:
            $std->part_id = 2;
            break;
            case 2:
                $std->part_id = 3;
                break;
                case 3:
                    $std->part_id = 4;
                    break;
                    case 4:
                        $std->part_id = 5;
                        break;
                        case 6:
                            $std->part_id = 7;
                            break;
                            case 7:
                                $std->part_id = 8;
                                break;
                                default:
                                echo "<div class=alert alert-danger>لا يمكن تحويله تاكد  وجود الفصل</div>";
                            break;

    }
        $std->save();

        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Examination Updated Susscefully');        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
