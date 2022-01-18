<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('title' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);

        return view('admin.news.index',compact('news','request'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $news = News::create($request->all());
        $random = Str::random(10);

        if ($request->hasFile('image')) {
            $news
                ->addMediaFromRequest('image')
                ->UsingName($news->title)
                ->UsingFileName("$random.Webp")
                ->toMediaCollection('images');
        }
        return redirect()->route('news.index')
            ->with(['message' => "تم إضافة $news->title بنجاح "]);

    }

    public function edit($id)
    {
        $model = News::findOrFail($id);
        return view('admin.news.edit',compact('model'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->all());

        $random = Str::random(10);

        if ($request->hasFile('image')) {
            $news
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($news->title)
                ->UsingFileName("$random.Webp")
                ->toMediaCollection('images');
        }
        return redirect()->route('news.index')
            ->with(['message' => "تم تعديل  $news->title بنجاح "]);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index')
            ->with(['delete' => "تم حذف  $news->title"]);
    }
}
