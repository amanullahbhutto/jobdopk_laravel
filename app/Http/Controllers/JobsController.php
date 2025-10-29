<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function jobCategories()
    {
        return view('job-categories');  
    }

    public function jobGridOne()
    {
        return view('job-grid-one');  
    }

    public function jobGridTwo()
    {
        return view('job-grid-two');  
    }

    public function jobGridThree()
    {
        return view('job-grid-three');  
    }

    public function jobGridFour()
    {
        return view('job-grid-four');  
    }

    public function jobListOne()
    {
        return view('job-list-one');  
    }

    public function jobListTwo()
    {
        return view('job-list-two');  
    }

    public function jobListThree()
    {
        return view('job-list-three');  
    }

    public function jobListFour()
    {
        return view('job-list-four');  
    }

    public function jobListFive()
    {
        return view('job-list-five');  
    }

    public function jobListSix()
    {
        return view('job-list-six');  
    }

    public function jobDetailOne()
    {
        // return view('job-detail-one');  
    }

    public function jobDetailTwo()
    {
        return view('job-detail-two');  
    }

    public function jobDetailThree()
    {
        return view('job-detail-three');  
    }

    public function jobApply()
    {
        return view('job-apply');  
    }

    public function jobPost()
    {
        return view('job-post');  
    }

    public function career()
    {
        return view('career');  
    }
}
