<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\DiscountSettingParent;
use Modules\Finance\Transformers\DiscountSettingParentResource;
use Modules\Finance\Http\Requests\CreateDiscountSettingParentRequest;

class DiscountSettingParentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return DiscountSettingParentResource::collection(DiscountSettingParent::all());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('finance::create');
    }
    
    public function discounts()
    {
        return view('finance::create');
    }
    public function discountSetting()
    {
        return view('finance::create');
    }
    
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateDiscountSettingParentRequest $request)
    {
        $id = DiscountSettingParent::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'DiscountSettingParent_id' => $id
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new DiscountSettingParentResource(DiscountSettingParent::findOrfail($id));
        /* return view('finance::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new DiscountSettingParentResource(DiscountSettingParent::findOrfail($id));
        /* return view('finance::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateDiscountSettingParentRequest $request, $id)
    {
        DiscountSettingParent::findOrfail($id)->update($request->all());
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
        DiscountSettingParent::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }
}