@extends('layouts.app')
@section('content')
@include('layouts.partials.hero_section')

    <main>
        <!-- Search -->
        @include('layouts.partials.search')
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            <!-- Item 1 -->
            @if(count($jobs) > 0)
            @foreach ($jobs as $job)
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                         <img  class="hidden w-48 mr-6 md:block" src="{{ $job->image ? asset('uploads/job/'.$job->image) : asset('assets/images/no-image.png') }}">
                        <div>
                            <h3 class="text-2xl">
                                <a href="{{ route('jobs.show',$job->id) }}">{{ $job->job_title ?? null  }}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{ $job->company_name  ?? null }}</div>
                            <ul class="flex">
                                    @php
                                        $tags = explode(',' , $job->tags )
                                    @endphp
                                    @foreach ($tags as $tag)
                                    <li
                                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                        <a href="#">{{ $tag }}</a>
                                    </li>
                                    @endforeach
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$job->location  ?? null}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div style="color:red; margin-left:500px;font-weight:bold">No Jobs Found!</div>
            @endif

        </div>
         <div class="m-5">{{ $jobs->links() }}</div>
    </main>
@endsection
