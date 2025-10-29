
@extends('layouts.main')

@section('title', 'Services Page')

@section('content')

@php
$jobs = [
    [
        'id' => 1,
        'img' => 'assets/images/company/facebook-logo.png', 
        'title' => 'Web Designer',
        'jobTime' => 'Full Time',
        'date' => '20th Feb 2025',
        'location' => 'Australia',
        'price' => '$4,000 - $4,500',
        'btn' => 'Apply Now',
        'star' => 'true'
    ],
    [
        'id' => 2,
        'img' => 'assets/images/company/google-logo.png', 
        'title' => 'Marketing Director',
        'jobTime' => 'Part Time',
        'date' => '20th Feb 2025',
        'location' => 'USA',
        'price' => '$4,000 - $4,500',
        'btn' => 'Apply Now',
        'star' => 'false'
    ],
    [
        'id' => 3,
        'img' => 'assets/images/company/android.png', 
        'title' => 'App Developer',
        'jobTime' => 'Remote',
        'date' => '20th Feb 2025',
        'location' => 'China',
        'price' => '$4,000 - $4,500',
        'btn' => 'Apply Now',
        'star' => 'false'
    ],
    [
        'id' => 4,
        'img' => 'assets/images/company/lenovo-logo.png', 
        'title' => 'Product Designer',
        'jobTime' => 'WFH',
        'date' => '20th Feb 2025',
        'location' => 'Dubai',
        'price' => '$4,000 - $4,500',
        'btn' => 'Apply Now',
        'star' => 'false'
    ],
    [
        'id' => 5,
        'img' => 'assets/images/company/spotify.png', 
        'title' => 'C++ Developer',
        'jobTime' => 'Full Time',
        'date' => '20th Feb 2025',
        'location' => 'India',
        'price' => '$4,000 - $4,500',
        'btn' => 'Apply Now',
        'star' => 'true'
    ],
    [
        'id' => 6,
        'img' => 'assets/images/company/linkedin.png', 
        'title' => 'Php Developer',
        'jobTime' => 'Remote',
        'date' => '20th Feb 2025',
        'location' => 'India',
        'price' => '$4,000 - $4,500',
        'btn' => 'Apply Now',
        'star' => 'true'
    ]
];
@endphp

<div class="container mx-auto py-20">
    <div class="">
        @foreach ($jobs as $item)
            <div class="col-12">
                <div class="group relative overflow-hidden md:flex justify-between items-center rounded shadow-sm hover:shadow-md dark:shadow-gray-700 transition-all duration-500 p-5">
                    
                    <div class="flex items-center">
                        <div class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset($item['img']) }}" class="size-8" alt="">
                        </div>
                        {{-- <a href="{{ route('job-detail-one', ['title' => Str::slug($item['title'])]) }}" class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500 ms-3 min-w-[180px]">{{ $item['title'] }}</a> --}}
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-4">
                        <span class="block">
                            <span class="bg-emerald-600/10 inline-block text-emerald-600 text-xs px-2.5 py-0.5 font-semibold rounded-full">{{ $item['jobTime'] }}</span>
                        </span>
                        <span class="block text-slate-400 text-sm md:mt-1 mt-0">
                            <i class="uil uil-clock"></i> {{ $item['date'] }}
                        </span>
                    </div>

                    <div class="md:block flex justify-between md:mt-0 mt-2">
                        <span class="text-slate-400"><i class="uil uil-map-marker"></i> {{ $item['location'] }}</span>
                        <span class="block font-semibold md:mt-1 mt-0">{{ $item['price'] }}</span>
                    </div>


                    <div class="md:mt-0 mt-4">
                        <a href="" class="size-9 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out inline-flex items-center text-center justify-center text-base rounded-full bg-emerald-600/5 hover:bg-emerald-600 border-emerald-600/10 hover:border-emerald-600 text-emerald-600 hover:text-white md:relative absolute top-0 end-0 md:m-0 m-3">
                            <i data-feather="bookmark" class="size-4"></i>
                        </a>
                        <a href="{{ url('/job-apply') }}" class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">
                            {{ $item['btn'] }}
                        </a>
                    </div>

                    @if ($item['star'] === 'true')
                        <span class="w-24 bg-yellow-400 text-white text-center absolute ltr:-rotate-45 rtl:rotate-45 -start-[30px] top-1">
                            <i class="uil uil-star"></i>
                        </span>
                    @endif

                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection


