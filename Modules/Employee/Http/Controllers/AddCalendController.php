<?php

namespace Modules\Employee\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Employee\Entities\Calend;
use Modules\Employee\Transformers\CalendResource;
<<<<<<< HEAD
use Modules\Employee\Http\Requests\CreateAddCalendRequest;

class AddCalendController extends Controller
{
    /**
   /**
    * Display a listing of the resource.
    * @return Response
    */
   public function index()
   {
       $calend = Calend::all();
       return view('employee::calends.index', ['calends' => $calend]);
   }
=======
use Modules\Employee\Http\Requests\CreateCalendRequest;
use Session;
class AddCalendController extends Controller
{

    public function index()
    {
        $payruls = PayRuls::all();
        return view('student::students.account.pay-ruls.index ', ['payruls' => $payruls]);
    }
>>>>>>> be0af1cd5daf39b5d54e2a884fb1563dd061badd

   /**
    * Show the form for creating a new resource.
    * @return Response
    */
   public function create()
   {
       return view('employee::create');
   }

<<<<<<< HEAD
   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Response
    */
   public function store(CreateAddCalendRequest $request)
   {
       $Calend= Calend::create($request->all());

       if($Calend){
=======
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreatePayRulsRequest $request)
    {
        $ismandatary = $request->has('is_mandatary') ? true : false;


        $payrul = PayRuls::create([
             'name' => $request->name,
             'is_mandatary' => $ismandatary,
            'note' => $request->note
     ]);
         if($payrul){
            Session::flash('flash_massage_type');
             return redirect()->route('pay_rules.index')->withFlashMassage('PayRuls Created Susscefully');
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
        return view('student::students.account.pay-ruls.show', ['Infos' => $Infos]);
    }
    /**
     * Show all classrooms in one payrul .
     * @param int $id
     * @return Response
     */
>>>>>>> be0af1cd5daf39b5d54e2a884fb1563dd061badd

           Session::flash('flash_massage_type');
           return redirect()->route('calends.index')->withFlashMassage('تمت اضافة المخالفة بنجاح');
       }
   }
   /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
   public function show($id)
   {
       $calendInfo = calend::findOrFail($id);
       return view('employee::calends.show', ['calendInfo' => $calendInfo]);
   }
   /**
    * Show all classrooms in one calend .
    * @param int $id
    * @return Response
    */
   public function classrooms($id)
   {
       return new ClassroomResource(calend::findOrfail($id)->classrooms);
       /* return view('employee::show'); */
   }

<<<<<<< HEAD
   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
   public function edit($id)
   {
       $calendInfo = calend::findOrFail($id);
       return view('employee::calends.edit', ['calendInfo' => $calendInfo]);
   }
   /**
    * Update the specified resource in storage.
    * @param Request $request
    * @param int $id
    * @return Response
    */
   public function update(CreateAddCalendRequest $request, $id)
   {
     $updatecalend = calend::findOrfail($id)->update($request->all());
     
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage(' تم تعديل المخالفة بنجاح');
   }


   /**
    * Remove the specified resource from storage.
    * @param int $id
    * @return Response
    */
   public function destroy($id, Calend $Onecalend)
   {
     $CalendForDelete = $Onecalend->findOrfail($id);
     $CalendForDelete->delete();
     Session::flash('flash_massage_type');
     return redirect()->back()->withFlashMassage('تم حذف المخالفة بنجاح');
   }      
=======
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $payrulInfo = PayRuls::findOrFail($id);
        return view('student::students.account.pay-ruls.edit', ['payrulInfo' => $payrulInfo]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreatePayRulsRequest $request, $id)
    {
        $ismandatary = $request->has('is_mandatary') ? true : false;
        $payruls=PayRuls::findorFail($id);

        $payruls->name = $request->name;
            $payruls->is_mandatary = $ismandatary;
           $payruls->note = $request->note;
$payruls->save();

      Session::flash('flash_massage_type');
      return redirect()->route('pay_rules.index')->withFlashMassage('PayRuls Updated Susscefully');
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $payrul = PayRuls::findOrFail($id);
      $payrul->delete();
      Session::flash('flash_massage_type');
      return redirect()->route('pay_rules.index')->withFlashMassage('PayRuls Deleted Susscefully');
    }

>>>>>>> be0af1cd5daf39b5d54e2a884fb1563dd061badd

}
