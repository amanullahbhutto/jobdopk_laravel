@extends('layouts.main')

@section('title', 'Services Page')

@section('content') 
<!-- Start -->
<section class="bg-slate-50 dark:bg-slate-800 md:py-24 py-16">
  <div class="container mt-10">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-8 md:col-span-6">
                <div class="md:flex items-center p-6 shadow-sm dark:shadow-gray-700 rounded-md bg-white dark:bg-slate-900">
                    <img src="{{ !empty($item['img']) ? asset($item['img']) : asset('assets/images/company/lenovo-logo.png') }}" class="rounded-full size-28 p-4 bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700" alt="">

                    <div class="md:ms-4 md:mt-0 mt-6">
                        <h5 class="text-xl font-semibold">
                            @if(!empty($item['title']))
                                {{ $item['title'] }}
                            @else
                                Back-End Developer
                            @endif
                        </h5>
                        <div class="mt-2">
                            <span class="text-slate-400 font-medium me-2 inline-block"><i class="uil uil-building text-[18px] text-emerald-600 me-1"></i> 
                                @if(!empty($item['company']))
                                    {{ $item['company'] }}
                                @else
                                    Lenovo pvt. ltd.
                                @endif
                            </span>
                            <span class="text-slate-400 font-medium me-2 inline-block"><i class="uil uil-map-marker text-[18px] text-emerald-600 me-1"></i> 
                                @if(!empty($item['location']))
                                    {{ $item['location'] }}
                                @else
                                    Beijing, China
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                <h5 class="text-lg font-semibold mt-6">Job Description:</h5>

                <p class="text-slate-400 mt-4">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others - which creates a distinct visual impression. Moreover, in Latin only words at the beginning of sentences are capitalized.</p>
                <p class="text-slate-400 mt-4">This means that Lorem Ipsum cannot accurately represent, for example, German, in which all nouns are capitalized. Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces.</p>
                <p class="text-slate-400 mt-4">It sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                
                <h5 class="text-lg font-semibold mt-6">Responsibilities and Duties: </h5>
                <p class="text-slate-400 mt-4">It sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                <ul class="list-none">
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Participate in requirements analysis</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Write clean, scalable code using C# and .NET frameworks</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Test and deploy applications and systems</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Revise, update, refactor and debug code</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Improve existing software</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Develop documentation throughout the software development life cycle (SDLC)</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Serve as an expert on applications and provide technical support</li>
                </ul>

                <h5 class="text-lg font-semibold mt-6">Required Experience, Skills and Qualifications: </h5>
                <p class="text-slate-400 mt-4">It sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                <ul class="list-none">
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Proven experience as a .NET Developer or Application Developer</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>good understanding of SQL and Relational Databases, specifically Microsoft SQL Server.</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Experience designing, developing and creating RESTful web services and APIs</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Basic know how of Agile process and practices</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Good understanding of object-oriented programming.</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Good understanding of concurrent programming.</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Sound knowledge of application architecture and design.</li>
                    <li class="text-slate-400 mt-2"><i class="uil uil-arrow-right text-emerald-600 me-1"></i>Excellent problem solving and analytical skills</li>
                </ul>

                <div class="mt-5">
                    <a href="{{ url('/job-apply') }}" class="py-1 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white md:ms-2 w-full md:w-auto">Apply Now</a>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-4 md:col-span-6">
                <div class="shadow-sm dark:shadow-gray-700 rounded-md bg-white dark:bg-slate-900 sticky top-20">
                    <div class="p-6">
                        <h5 class="text-lg font-semibold">Job Information</h5>
                    </div>
                    <div class="p-6 border-t border-slate-100 dark:border-t-gray-700">
                        <ul class="list-none">
                            <li class="flex items-center">
                                <i data-feather="user-check" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Employee Type:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        @if(!empty($item['jobTime']))
                                            {{ $item['jobTime'] }}
                                        @else
                                            Full Time
                                        @endif
                                    </span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="map-pin" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Location:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        @if(!empty($item['location']))
                                            {{ $item['location'] }}
                                        @else
                                            Beijing, China
                                        @endif
                                    </span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="monitor" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Job Type:</p>
                                    <span class="text-emerald-600 font-medium text-sm">
                                        @if(!empty($item['title']))
                                            {{ $item['title'] }}
                                        @else
                                            Back-End Developer
                                        @endif
                                    </span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="briefcase" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Experience:</p>
                                    <span class="text-emerald-600 font-medium text-sm">2+ years</span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="book" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Qualifications:</p>
                                    <span class="text-emerald-600 font-medium text-sm">MCA</span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="dollar-sign" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Salary:</p>
                                    <span class="text-emerald-600 font-medium text-sm">$4000 - $4500</span>
                                </div>
                            </li>

                            <li class="flex items-center mt-3">
                                <i data-feather="clock" class="size-5"></i>

                                <div class="ms-4">
                                    <p class="font-medium">Date posted:</p>
                                    <span class="text-emerald-600 font-medium text-sm">28th Feb, 2025</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end grid-->
    </div><!--end container-->

    

</section><!--end section-->
<!-- End -->
@endsection

