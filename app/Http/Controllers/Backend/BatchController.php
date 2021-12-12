<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Course;
use App\Models\Backend\Mentor;
use App\Models\Backend\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::orderBy('id', 'desc')->get();
        return view('backend.pages.batch.manage', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses  = Course::orderBy('english_titel', 'asc')->get();
        $mentors  = Mentor::orderBy('fullname', 'asc')->get();
        $branches = Branch::orderBy('name', 'asc')->get();
        return view('backend.pages.batch.create', compact('courses', 'mentors', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch = new Batch();

        $batch->batch_name       = $request->batch_name;
        $batch->slug             = Str::slug($request->batch_name);
        $batch->starting_date    = $request->starting_date;
        $batch->class_day        = $request->class_day;
        $batch->class_time       = $request->class_time;
        $batch->fb_group         = $request->fb_group;
        $batch->sit_number       = $request->sit_number;
        $batch->branch_id        = $request->branch_id;
        $batch->course_id        = $request->course_id;
        $batch->mentor_id        = $request->mentor_id;
        $batch->batch_type       = $request->batch_type;
        $batch->admission_status = $request->admission_status;
        $batch->status           = $request->status;

        // dd($batch);
        // exit();
        $batch->save();
        return redirect()->route('batch.manage')->with('success','New batch added successfully');
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
        $batch = Batch::find($id);
        if( !is_null($batch) ) {
            $courses  = Course::orderBy('english_titel', 'asc')->get();
            $mentors  = Mentor::orderBy('fullname', 'asc')->get();
            $branches = Branch::orderBy('name', 'asc')->get();
            return view('backend.pages.batch.edit', compact('batch','branches','courses','mentors'));
        } 
        else {
            return route('batch.manage');
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
        $batch = Batch::find($id);

        $batch->batch_name       = $request->batch_name;
        $batch->slug             = Str::slug($request->batch_name);
        $batch->starting_date    = $request->starting_date;
        $batch->class_day        = $request->class_day;
        $batch->class_time       = $request->class_time;
        $batch->fb_group         = $request->fb_group;
        $batch->sit_number       = $request->sit_number;
        $batch->branch_id        = $request->branch_id;
        $batch->course_id        = $request->course_id;
        $batch->mentor_id        = $request->mentor_id;
        $batch->batch_type       = $request->batch_type;
        $batch->admission_status = $request->admission_status;
        $batch->status           = $request->status;

        $batch->save();
        return redirect()->route('batch.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batch = Batch::find($id);
        if( !is_null($batch) ) {
            $batch->delete();
            return redirect()->route('batch.manage');
        } 
    }
}
