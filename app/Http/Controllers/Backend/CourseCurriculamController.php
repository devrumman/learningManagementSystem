<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Course;
use App\Models\Backend\CourseCurriculam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class CourseCurriculamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculams = CourseCurriculam::orderBy('id', 'asc')->get();
        return view('backend.pages.curriculam.manage', compact('curriculams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderBy('english_titel', 'asc')->get(); 
        return view('backend.pages.curriculam.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curriculam = new CourseCurriculam();

        $curriculam->course_id   = $request->course_id;
        $curriculam->one_en      = $request->one_en;
        $curriculam->one_bn      = $request->one_bn;
        $curriculam->one_desc    = $request->one_desc;
        $curriculam->two_en      = $request->two_en;
        $curriculam->two_bn      = $request->two_bn;
        $curriculam->two_desc    = $request->two_desc;
        $curriculam->three_en    = $request->three_en;
        $curriculam->three_bn    = $request->three_bn;
        $curriculam->three_desc  = $request->three_desc;
        $curriculam->four_en     = $request->four_en;
        $curriculam->four_bn     = $request->four_bn;
        $curriculam->four_desc   = $request->four_desc;
        $curriculam->five_en     = $request->five_en;
        $curriculam->five_bn     = $request->five_bn;
        $curriculam->five_desc   = $request->five_desc;
        $curriculam->status      = $request->status;

        $curriculam->save();
        return redirect()->route('curriculam.manage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $curriculam = CourseCurriculam::find($id);
       $courses = Course::orderBy('english_titel', 'asc')->get(); 
       if ( !empty($curriculam) )
       {
           return view('backend/pages.curriculam.edit', compact('curriculam' , 'courses'));
       }
       else
       {
           return redirect()->route('curriculam.manage');
       }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curriculam = CourseCurriculam::find($id);

        $curriculam->course_id   = $request->course_id;
        $curriculam->one_en      = $request->one_en;
        $curriculam->one_bn      = $request->one_bn;
        $curriculam->one_desc    = $request->one_desc;
        $curriculam->two_en      = $request->two_en;
        $curriculam->two_bn      = $request->two_bn;
        $curriculam->two_desc    = $request->two_desc;
        $curriculam->three_en    = $request->three_en;
        $curriculam->three_bn    = $request->three_bn;
        $curriculam->three_desc  = $request->three_desc;
        $curriculam->four_en     = $request->four_en;
        $curriculam->four_bn     = $request->four_bn;
        $curriculam->four_desc   = $request->four_desc;
        $curriculam->five_en     = $request->five_en;
        $curriculam->five_bn     = $request->five_bn;
        $curriculam->five_desc   = $request->five_desc;
        $curriculam->status      = $request->status;

        $curriculam->save();
        return redirect()->route('curriculam.manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculam = CourseCurriculam::find($id);
        $curriculam->delete();

        return redirect()->route('curriculam.manage');
    }
}
