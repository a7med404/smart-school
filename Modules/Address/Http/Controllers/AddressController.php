<?php

namespace Modules\Address\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Address\Entities\Address;
use Modules\Address\Transformers\AddressResource;
use Modules\Address\Transformers\SingleAddressResource;
use Modules\Address\Http\Requests\CreateAddressRequest;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
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
        Address::create($data);
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
        ], 201);



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
        return new SingleAddressResource(Address::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateAddressRequest $request, $id)
    {
        Address::findOrfail($id)->update($request->all());
        return response()->json([
                'message' => 'تم التحديث بنجاح',
            ], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Address::findOrfail($id)->delete();
        return response()->json([
                'message' => 'تم الحذف بنجاح',
            ], 200);
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
