@extends('layouts.app')
@section('content')
    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Create a Job
                    </h2>
                    <p class="mb-4">Post a job to find a developer</p>
                </header>
                @include('alert.message')
                <br>
                <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" placeholder="Company Name" class="border border-gray-200 rounded p-2 w-full" name="company_name" value="{{ old('company_name') }}" />
                    </div>

                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="job_title"
                         value="{{ old('job_title') }}"   placeholder="Example: Senior Laravel Developer" />
                    </div>

                    <div class="mb-6">
                        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                            placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                        <input type="text" placeholder="Contact Email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
                    </div>

                    <div class="mb-6">
                        <label for="website" class="inline-block text-lg mb-2">
                            Website Link
                        </label>
                        <input type="text" placeholder="Website Link" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{ old('website') }}" />
                    </div>

                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                            placeholder="Example: Laravel, Backend, Postgres, etc"  value="{{ old('tags') }}"/>
                    </div>

                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Company Logo
                        </label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
                    </div>

                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Job Description
                        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-6">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Create Job
                        </button>

                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
