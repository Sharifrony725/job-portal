<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\JobStoreRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $jobs = Job::latest()->paginate(4);
        return view('welcome',compact('jobs'));
    }
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('backend.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreRequest $request)
    {
        $job = new Job();
        $job->fill($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/job', $filename);
            $job->image = $filename;
        }
        $job->save();
        return redirect()->route('jobs.create')->with('success', 'job created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $job = Job::find($id);
       return view('backend.job.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('backend.job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, $id)
    {
        $job = Job::find($id);
        $job->fill($request->all());
        if ($request->hasFile('image')) {
            $destination = public_path('uploads\job/' . $job->image);
            dd($destination);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/job', $filename);
            $job->image = $filename;
        }
        $job->save();
        return redirect()->route('jobs.index')->with('success', 'job Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $destination = public_path('uploads\job/' . $job->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $job->delete();
        return  redirect()->route('jobs.index')->with('success', 'job delete successfully!');
    }
}
