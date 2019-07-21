<?php

namespace Modules\Address\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Address\Entities\Contact;
use Modules\Address\Transformers\ContactResource;
use Modules\Address\Transformers\SingleContactResource;
use Modules\Address\Http\Requests\CreateContactRequest;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return new ContactResource(Contact::all());
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
    public function store(CreateContactRequest $request)
    {
        $data = [
            'number_1'          =>  $request->number_1,
            'number_2'          =>  $request->number_2,
            'email'             =>  $request->email,
            'note'              =>  $request->note,
            'contactable_id'    =>  $request->contactable_id,
            'contactable_type'  =>  $request->contactable_type
        ];
        Contact::create($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Contact Added Susscefully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SingleContactResource(Contact::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $contactInfo = Contact::findOrfail($id);
        return view('address::contacts.edit',['contactInfo' => $contactInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateContactRequest $request, $id)
    {
        $data = [
            'number_1'          =>  $request->number_1,
            'number_2'          =>  $request->number_2,
            'email'             =>  $request->email,
            'note'              =>  $request->note,
            'contactable_id'    =>  $request->contactable_id,
            'contactable_type'  =>  $request->contactable_type
        ];
        Contact::findOrfail($id)->update($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Contact Updeted Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Contact $oneContact)
    {
      $addressForDelete = $oneContact->findOrfail($id);
      $addressForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Contact Deleted Susscefully');
    }
}
