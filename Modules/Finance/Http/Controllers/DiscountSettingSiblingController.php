<?php

namespace Modules\Finance\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Finance\Entities\DiscountSettingSibling;
use Modules\Finance\Transformers\DiscountSettingSiblingResource;
use Modules\Finance\Http\Requests\CreateDiscountSettingSiblingRequest;

class DiscountSettingSiblingController extends Controller
{
   /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return DiscountSettingSiblingResource::collection(DiscountSettingSibling::all());
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
    public function store(CreateDiscountSettingSiblingRequest $request)
    {
        $id = DiscountSettingSibling::create($request->all())->id;
        return response()->json([
            'message' => 'تم الحفظ بنجاح',
            'DiscountSettingSibling_id' => $id
        ], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new DiscountSettingSiblingResource(DiscountSettingSibling::findOrfail($id));
        /* return view('finance::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new DiscountSettingSiblingResource(DiscountSettingSibling::findOrfail($id));
        /* return view('finance::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateDiscountSettingSiblingRequest $request, $id)
    {
        DiscountSettingSibling::findOrfail($id)->update($request->all());
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
        DiscountSettingSibling::findOrfail($id)->delete();
        return response()->json([
            'message' => 'تم الحذف بنجاح',
        ], 200);
    }
}
