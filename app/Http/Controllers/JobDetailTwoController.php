<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobDetailTwoController extends Controller
{
    public function show($title)
    {
        $jobs = [
            [
                'id' => 1,
                'img' => 'assets/images/company/facebook-logo.png', 
                'company' => 'Facebook',
                'days' => '2 days ago',
                'jobTime' => 'Full Time',
                'title' => 'Web Designer / Developer',
                'location' => 'Australia'
            ],
            [
                'id' => 2,
                'img' => 'assets/images/company/google-logo.png', 
                'company' => 'Google',
                'days' => '2 days ago',
                'jobTime' => 'Part Time',
                'title' => 'Marketing Director',
                'location' => 'USA'
            ],
            [
                'id' => 3,
                'img' => 'assets/images/company/android.png', 
                'company' => 'Android',
                'days' => '2 days ago',
                'jobTime' => 'Remote',
                'title' => 'Application Developer',
                'location' => 'China'
            ],
            [
                'id' => 4,
                'img' => 'assets/images/company/lenovo-logo.png', 
                'company' => 'Lenovo',
                'days' => '2 days ago',
                'jobTime' => 'WFH',
                'title' => 'Senior Product Designer',
                'location' => 'Dubai'
            ],
            [
                'id' => 5,
                'img' => 'assets/images/company/spotify.png', 
                'company' => 'Spotify',
                'days' => '2 days ago',
                'jobTime' => 'Full Time',
                'title' => 'C++ Developer',
                'location' => 'India'
            ],
            [
                'id' => 6,
                'img' => 'assets/images/company/linkedin.png', 
                'company' => 'Linkedin',
                'days' => '2 days ago',
                'jobTime' => 'Remote',
                'title' => 'Php Developer',
                'location' => 'India'
            ]
        ];

        // Find the course by ID
        $item = collect($jobs)->first(function ($job) use ($title) {
            return Str::slug($job['title']) === $title;
        });

        // If course not found, return 404 error
        if (!$item) {
            abort(404);
        }

        // Return the view and pass the course data to the view
        return view('job-detail-two', compact('item'));
    }
}

