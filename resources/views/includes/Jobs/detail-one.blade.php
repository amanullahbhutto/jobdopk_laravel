@php
$jobs = [
    [
        'id' => 1,
        'img' => 'assets/images/company/facebook-logo.png', 
        'company' => 'Facebook',
        'days' => '2 days ago',
        'jobTime' => 'Full Time',
        'title' => 'Web Designer',
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
        'title' => 'App Developer',
        'location' => 'China'
    ]
];
@endphp

@foreach ($jobs as $item)
    <div class="group shadow-sm dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 rounded-md">
                    <img src="{{ asset($item['img']) }}" class="size-8"  alt="">
                </div>

                <div class="ms-3">
                    <a href="{{ route('employer-detail',  ['company' => Str::slug($item['company'])]) }}" class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">{{ $item['company'] }}</a>
                    <span class="block text-sm text-slate-400">2 days ago</span>
                </div>
            </div>

            <span class="bg-emerald-600/10 group-hover:bg-emerald-600 inline-block text-emerald-600 group-hover:text-white text-xs px-2.5 py-0.5 font-semibold rounded-full transition-all duration-500">{{ $item['jobTime'] }}</span>
        </div>

        <div class="mt-6">
            <a href="{{ route('job-detail-one', ['title' => Str::slug($item['title'])]) }}" class="text-lg hover:text-emerald-600 font-semibold transition-all duration-500">{{ $item['title'] }}</a>
            <h6 class="text-base font-medium"><i class="uil uil-map-marker"></i> {{ $item['location'] }}</h6>
        </div>

        <div class="mt-6">
            <div class="w-full bg-gray-100 dark:bg-gray-800 rounded-full h-[6px]">
                <div class="bg-emerald-600 h-[6px] rounded-full" style="width: 55%"></div>
            </div>
            <div class="mt-2">
                <span class="text-slate-400 text-sm"><span class="text-slate-900 dark:text-white font-semibold inline-block">21 applied</span> of 40 vacancy</span>
            </div>
        </div>
    </div>
@endforeach