<?php

namespace Modules\Address\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Address\Entities\Address;
use Modules\Address\Transformers\AddressResource;
use Modules\Address\Transformers\SingleAddressResource;
use Modules\Address\Http\Requests\CreateAddressRequest;
use Illuminate\Support\Facades\Session;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Address $address){
        $allUsers = $address->all();
        return view('address::addresses.index', ['addresses' => $allUsers]);
        return new AddressResource(Address::all());
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
    public function store(CreateAddressRequest $request)
    {
        $data = [
            'street_1'          =>  $request->street_1,
            'street_2'          =>  $request->street_2,
            'local'             =>  $request->local,
            'home_number'       =>  $request->home_number,
            'city'              =>  $request->city,
            'addressable_id'    =>  $request->addressable_id,
            'addressable_type'  =>  $request->addressable_type
        ];
        $student = Address::create($request->all());
        // Address::create($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Address Added Susscefully');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SingleAddressResource(Address::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $addressInfo = Address::findOrfail($id);
        return view('address::addresses.edit',['addressInfo' => $addressInfo]);
        // return redirect()->route("companies.show", ['id' => $addressInfo->addressable_id])->with(['addressInfo' => $addressInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateAddressRequest $request, $id)
    {
        $data = [
            'street_1'          =>  $request->street_1,
            'street_2'          =>  $request->street_2,
            'local'             =>  $request->local,
            'home_number'       =>  $request->home_number,
            'city'              =>  $request->city,
            'addressable_id'    =>  $request->addressable_id,
            'addressable_type'  =>  $request->addressable_type
        ];
        Address::findOrfail($id)->update($data);
        Session::flash('flash_massage_type');
        return redirect()->back()->withFlashMassage('Address Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id, Address $oneAddress)
    {
      $addressForDelete = $oneAddress->findOrfail($id);
      $addressForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Address Deleted Susscefully');
    }

    public function getLocals($id)
    {

        $locals = [
            1 => [1 => 'الفاشر', 2 => 'الطينة', 3 => 'كرنوي'],
            2 => [1 => 'حي الميدان', 2 => 'حي العباسية', 3 => 'المحروقة'],
            3 => [1 => 'الطينة', 2 => 'حي العباسية', 3 => 'المحروقة'],
        ];
        return response()->json( $locals[$id] );
    }

}
