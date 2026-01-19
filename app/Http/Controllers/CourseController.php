<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CourseEditRequest;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(CourseRequest $request)
    {
        $corso = Course::create([
            'title' => $request->title,
            'pt' => $request->pt,
            'intensity' => $request->intensity,
            'time' => $request->time,
            'img' => $request->file('img')->store('img', 'public'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo corso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        if ($course->user_id == Auth::user()->id) {
            return view('course.edit', compact('course'));
        } else {
            return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseEditRequest $request, Course $course)
    {
        if ($course->user_id == Auth::user()->id) {
            $course->update([
                $course->title = $request->title,
                $course->pt = $request->pt,
                $course->intensity = $request->intensity,
                $course->time = $request->time
            ]);

            if ($request->img) {
                $request->validate(['img' => 'image']);
                $course->update([
                    $course->img = $request->file('img')->store('img', 'public')
                ]);
            }
            return redirect()->route('course.index')->with('successMessage', 'Hai correttamente modificato il corso');
        } else {
            return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if ($course->user_id == Auth::user()->id) {

            $course->delete();
            return redirect()->route('course.index')->with('successMessage', "Hai correttamente eliminato il corso");
        } else {
            return redirect()->route('homepage')->with('errorMessage', 'Non puoi vedere questa pagina');
        }
    }
}
