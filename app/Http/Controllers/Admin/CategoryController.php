<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::orderBy('id','DESC')->where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhereHas('user', function ($q) use ($request){
                        if($request->keyword){
                            $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
                                ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%');
                        }
                    });
            }})->paginate(25);

        return view('admin.categories.index',compact('categories','request'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $categories = Category::create($request->all());
        $random = Str::random(10);

        if ($request->hasFile('image')) {
            $categories
                ->addMediaFromRequest('image')
                ->UsingName($categories->name)
                ->UsingFileName("$random.Webp")
                ->toMediaCollection('images');
        }
        return redirect()->route('categories.index')
            ->with(['message' => "تم إضافة قسم جديد $categories->name بنجاح "]);

    }

    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('admin.categories.edit',compact('model'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());

        $random = Str::random(10);

        if ($request->hasFile('image')) {
            $categories
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($categories->name)
                ->UsingFileName("$random.Webp")
                ->toMediaCollection('images');
        }
        return redirect()->route('categories.index')
            ->with(['message' => "تم تعديل قسم$categories->name بنجاح "]);
    }

    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index')
            ->with(['delete' => "تم حذف قسم $categories->name"]);
    }

}
