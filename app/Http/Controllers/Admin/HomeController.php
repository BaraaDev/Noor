<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $visit_site  =  DB::table('visit_site')->where("created_at", ">=", date("Y-m-d H:i:s", strtotime('-1 month', time())))->count();

        return view('admin.home',compact('visit_site'));
    }

    public function visits(Request $request) {
        $visits = Visit::orderBy('id','DESC')->where("created_at", ">=", date("Y-m-d H:i:s", strtotime('-1 month', time())))->where(function ($q) use($request){
            if($request->keyword){
                $q->where('ip' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('agent' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('session_id' , 'LIKE' , '%'.$request->keyword.'%');
            }})->paginate(25);

        return view('admin.visit',compact('visits','request'));
    }
}
