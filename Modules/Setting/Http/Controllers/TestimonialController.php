<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Testimonial;
use Modules\Setting\Http\Requests\CreateTestimonialRequest;
use Session;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        return view('setting::testimonials.index', ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('setting::testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = [
            'how'       => $request->how,
            'text'      => $request->text,
            'status'    => $request->status,
        ];
        $testimonial->create($data);
        Session::flash('flash_massage_type', 1);
        return redirect('cpanelAdmin/testimonials')->withFlashMassage('Testimonial Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $testimonialInfo = Testimonial::findOrFail($id);
        return view('setting::testimonials.show', ['testimonialInfo' => $testimonialInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $testimonialInfo = Testimonial::findOrFail($id);
        return view('setting::testimonials.edit', ['testimonialInfo' => $testimonialInfo]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CreateTestimonialRequest $request, $id)
    {
        $testimonialInfo = Testimonial::findOrFail($id);
        $data = [
            'how'       => $request->how,
            'text'      => $request->text,
            'status'    => $request->status,
        ];
        $testimonialInfo->fill($data)->save();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $testimonialForDelete = Testimonial::findOrFail($id);
        $testimonialForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Testimonial Deleted Successfully');
    }
}
