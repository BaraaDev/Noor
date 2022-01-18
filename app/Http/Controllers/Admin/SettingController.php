<?php
// NO
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{

    public function index()
    {
        return abort(404);
    }

    public function create()
    {
        $settings = Setting::orderBy('id','desc')->latest()->get();
        if(count($settings) == 0)
        {
            return view('admin.settings.create');
        } else {
            return abort(404);
        }

    }


    public function store(Request $request)
    {
        $settings = Setting::create($request->all());
        $random = Str::random(10);
        if ($request->hasFile('image')) {
            $settings
                ->addMediaFromRequest('image')
                ->UsingName('home')
                ->UsingFileName("$random.jpg")
                ->toMediaCollection('images');
        }

        return redirect()->route('settings.edit',$settings->id)
            ->with(['message' => "تم الإضافة بنجاح"]);
    }

    public function show($id)
    {
        return abort(404);
    }


    public function edit($id)
    {
        $model = Setting::findOrFail($id);
        return view('admin.settings.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $settings = Setting::findOrFail($id);
        $settings->update($request->all());
        $random = Str::random(10);
        if ($request->hasFile('image')) {
            $settings
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName('home')
                ->UsingFileName("$random.jpg")
                ->toMediaCollection('images');
        }

        return redirect()->back()
            ->with(['message' => "تم التعديل بنجاح"]);
    }


    public function destroy($id)
    {
        return abort(404);
    }
}
