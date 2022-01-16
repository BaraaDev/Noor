<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $categories = Category::create($request->all());

        return redirect()->route('categories.index')
            ->with(['message' => "تم إضافة قسم جديد $categories->name بنجاح "]);

    }

    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('admin.categories.edit',compact('model'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());

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
