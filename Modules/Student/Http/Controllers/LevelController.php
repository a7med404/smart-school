<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Student\Entities\Level;
use Modules\Student\Transformers\LevelResource;
use Modules\Student\Transformers\SingleLevelResource;
use Modules\Student\Http\Requests\CreateLevelRequest;
use Modules\Student\Transformers\ClassroomResource;
class LevelController extends Controller
{ 
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return LevelResource::collection(Level::all());
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
        $data = [
            'name'          => $request->name, 
            'sort'          => $request->sort,
            'head_master'   => $request->head_master,  
            'school_master' => $request->school_master, 
        ];
        $level = Level::create($data);
        return response()->json(['message' => 'تم الحفظ بنجاح', 'data' => $level], 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new SingleLevelResource(Level::findOrfail($id));
        /* return view('student::show'); */
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return new SingleLevelResource(Level::findOrfail($id));
        /* return view('student::edit'); */
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateLevelRequest $request, $id)
    {
        $data = [
            'name' => $request->name, 
            'sort' => $request->sort,  
            'head_master' => $request->head_master,  
            'school_master' => $request->school_master, 
        ];
        Level::findOrfail($id)->fill($data);
        return response()->json(['message' => 'تم التحديث بنجاح'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Level::findOrfail($id)->delete();
        return response()->json(['message' => 'تم الحذف بنجاح'], 200);
    }


 
}
