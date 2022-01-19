<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::orderBy('id','DESC')->where(function ($q) use($request){
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

        return view('admin.services.index',compact('services','request'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $services = Service::create($request->all());

        return redirect()->route('services.index')
            ->with(['message' => "تم إضافة $services->name بنجاح "]);

    }

    public function edit($id)
    {
        $model = Service::findOrFail($id);
        return view('admin.services.edit',compact('model'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $services = Service::findOrFail($id);
        $services->update($request->all());

        return redirect()->route('services.index')
            ->with(['message' => "تم تعديل $services->name بنجاح "]);
    }

    public function destroy($id)
    {
        $services = Service::findOrFail($id);
        $services->delete();
        return redirect()->route('services.index')
            ->with(['delete' => "تم حذف  $services->name"]);
    }
}
