<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::where(function ($q) use($request){
            if($request->keyword){
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('email' , 'LIKE' , '%'.$request->keyword.'%')
               ;
            }
        })->paginate(28);
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->merge(['password' => bcrypt($request->password)]);
        $users = User::create($request->all());
        if ($request->hasFile('image')) {
            $users
                ->addMediaFromRequest('image')
                ->UsingName($users->name)
                ->UsingFileName("$users->name.jpg")
                ->toMediaCollection('images');
        }
        return redirect()->route('users.index')
            ->with(['message' => "تم إضافة $users->name بنجاح"]);
    }


    public function edit($id)
    {
        $model = User::findOrFail($id);

        return view('admin.users.edit',compact('model'));
    }

    public function update(Request $request, $id)
    {
        $request->merge(['password' => bcrypt($request->password)]);
        $users = User::findOrFail($id);
        $users->update($request->all());
        if ($request->hasFile('image')) {

            $users
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($users->name)
                ->UsingFileName("$users->name.jpg")
                ->toMediaCollection('images');
        }
        return redirect()->route('users.index')
            ->with(['message' => "تم تعديل $users->name بنجاح"]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')
            ->with(['delete' => "تم حذف المستخدم $user->name"]);

    }

}
