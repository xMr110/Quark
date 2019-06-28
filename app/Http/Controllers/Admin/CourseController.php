<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::all();
        return view('admin.courses.index',compact('courses'));
    }
    public function create()
    {
        return view('admin.courses.create-edit');
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.create-edit',compact('course'));
    }
    public function store(CourseRequest $request)
    {
        $this->validate($request,['image_path'=>'image|required']);
        $course = new Course();
        if ($request->hasFile('image_path'))
        {
            $course->image_path = $request->file('image_path')->store('courses','public');
        }
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->price = $request->get('price');
        $course->start = $request->get('start');
        $course->end = $request->get('end');
        $course->save();

        return redirect(action('Admin\CourseController@index'))->with('success','Course Added');
    }
    public function update(CourseRequest $request, $id)
    {
        $course = Course::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('/storage/'.$course->image_path)))
            {
                unlink(storage_path('/storage/'.$course->image_path));
            }
            else{
                $course->image_path = $request->file('image_path')->store('courses','public');
            }
        }
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->price = $request->get('price');
        $course->start = $request->get('start');
        $course->end = $request->get('end');
        $course->save();
        return redirect(action('Admin\CourseController@index'))->with('success','Course Updated');

    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        if (file_exists(storage_path('/storage/'.$course->image_path)))
        {
            unlink(storage_path('/storage/'.$course->image_path));
        }

        $course->delete();
        return redirect(action('Admin\CourseController@index'))->with('success','Course Deleted..');
    }
}
