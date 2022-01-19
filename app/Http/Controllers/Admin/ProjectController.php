<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);

        return view('admin.projects.index',compact('projects','request'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(ProjectRequest $request)
    {
        $projects = Project::create($request->all());

        return redirect()->route('projects.index')
            ->with(['message' => "تم إضافة $projects->title بنجاح "]);

    }

    public function edit($id)
    {
        $model = Project::findOrFail($id);
        return view('admin.projects.edit',compact('model'));
    }

    public function update(ProjectRequest $request, $id)
    {
        $projects = Project::findOrFail($id);
        $projects->update($request->all());

        return redirect()->route('projects.index')
            ->with(['message' => "تم تعديل $projects->title بنجاح "]);
    }

    public function destroy($id)
    {
        $projects = Project::findOrFail($id);
        $projects->delete();
        return redirect()->route('projects.index')
            ->with(['delete' => "تم حذف  $projects->title"]);
    }
}
