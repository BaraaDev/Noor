<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstateRequest;
use App\Models\RealEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Exceptions\DiskDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class RealEstateController extends Controller
{
    public function index(Request $request)
    {
        $real_estates = RealEstate::orderBy('id','DESC')->where(function ($q) use($request){
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

        return view('admin.real_estate.index',compact('real_estates','request'));
    }

    public function create()
    {
        return view('admin.real_estate.create');
    }

    public function store(RealEstateRequest $request)
    {
        $real_estates = RealEstate::create($request->all());
        $random = Str::random(10);

        if ($request->hasFile('image')) {
            $real_estates
                ->addMediaFromRequest('image')
                ->UsingName($real_estates->title)
                ->UsingFileName("$random.Webp")
                ->toMediaCollection('images');
        }

        return redirect()->route('real_estates.index')
            ->with(['message' => "تم إضافة  جديد $real_estates->title بنجاح "]);

    }

    public function edit($id)
    {
        $model = RealEstate::findOrFail($id);
        return view('admin.real_estate.edit',compact('model'));
    }

    public function update(RealEstateRequest $request, $id)
    {
        $real_estates = RealEstate::findOrFail($id);
        $real_estates->update($request->all());

        $random = Str::random(10);
        if ($request->hasFile('image')) {
            foreach ($request->image as $key => $value) {

                try {
                    $real_estates
                        ->addMedia($request->image[$key])
                        ->UsingName($real_estates->title)
                        ->UsingFileName("$random.Webp")
                        ->toMediaCollection('images');
                } catch (DiskDoesNotExist|FileDoesNotExist|FileIsTooBig $e) {

                }
            }
        }



        return redirect()->route('real_estates.index')
            ->with(['message' => "تم تعديل  $real_estates->title بنجاح "]);
    }

    public function destroy($id)
    {
        $real_estates = RealEstate::findOrFail($id);
        $real_estates->delete();
        return redirect()->route('real_estates.index')
            ->with(['delete' => "تم حذف  $real_estates->title"]);
    }
}
