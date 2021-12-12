<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Branch;
use App\Models\Backend\Course;
use App\Models\Backend\Mentor;
use App\Models\Backend\Batch;
use App\Models\Backend\Notice;
use App\Models\Backend\CourseCurriculam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.homepage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course()
    {
        $batches = Batch::orderBy('id', 'desc')->get();
        return view('frontend.pages.courses',  compact('batches'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursedetails($slug)
    {
        $batch   = Batch::orderBy('id', 'asc')->where('slug',$slug)->first();
        $course  = Course::orderBy('id', 'asc')->where('id',$batch->course_id)->first();
        $courseCuriculam  = CourseCurriculam::where('course_id',$course->id)->first();
        $mentor  = Mentor::where('id',$batch->mentor_id)->first();
        if (!empty($batch))
        {
            return view('frontend.pages.coursedetails', compact('batch', 'course', 'courseCuriculam', 'mentor'));
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admission($slug)
    {
        $batch   = Batch::where('slug',$slug)->first();
        $course  = Course::where('id',$batch->course_id)->first();
        $mentor  = Mentor::where('id',$batch->mentor_id)->first();
        
        return view('frontend.pages.admission', compact('batch', 'course', 'mentor'));
    }
    
    /**
     * User Login Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function stdLogin()
    {
        return view('frontend.pages.stdlogin');
    }

    /**
     * User Login Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function stdRegister()
    {
        return view('frontend.pages.stdRegister');
    }

    
    /**
     * User Login Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function stdDashboard()
    {
        return view('frontend.pages.stdDashboard');
    }

    
     /**
     *Mentor Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function mentor()
    {
        return view('frontend.pages.mentor');
    }

    
     /**
     *About Us Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontend.pages.about');
    }


     /**
     *Contact Us Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

}
