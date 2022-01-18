<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Course;
use App\Models\Framework;
use App\Models\Language;
use App\Models\Lesson;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(Request $request,$id , $slug = null){
        $user = User::findOrFail(auth()->user()->id);
        $sessions = DB::table('sessions')->where('user_id',auth()->user()->id)->limit(5)->get();

        $news = News::where('user_id',$user->id)->ORDERBY('created_at','ASC')->limit(5)->get();
        return view('admin.profile.index',
            compact('user','news','sessions'));
    }

    public function profileUpdate(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        $array = [];
        if($request->email != $user->email){
            $email = User::where('email' , $request->email)->first();
            if($email == null){
                $array['email'] =  $request->email;
            }
        }
        if($request->name != $user->name){
            $array['name'] =  $request->name;
        }


        if($request->bio != $user->bio){
            $array['bio'] =  $request->bio;
        }


        if($request->location != $user->location){
            $array['location'] =  $request->location;
        }

        if($request->phone != $user->phone){
            $array['phone'] =  $request->phone;
        }



        if ($request->hasFile('image')) {

            $user
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($user->name)
                ->UsingFileName("$user->name.jpg")
                ->toMediaCollection('images');
        }

        if(!empty($array)){
            $user->update($array);
        }

        return redirect()->route('profile.index')->with(['message' =>  "تم تعديل بيانات الحساب بنجاح"]);
    }

    public function profileUpdatePassword(Request $request){

        $rules = [
            'current_password'     => 'required|min:8',
            'password'             => 'required|confirmed|min:8',
        ];
        $message = [
            // validation current_password

            'current_password.required'     => 'كلمة السر الحالية مطلوبه',
            'current_password.min'          => 'يجب أن تكون كلمة السر اكثر من 8 أحرف',
            // validation password

            'password.required'     => 'كلمة السر الجديدة مطلوبه',
            'password.confirmed'    => 'يجب ان تكون كلمة السر مطابقة',
            'password.min'          => 'يجب أن تكون كلمة السر اكثر من 8 أحرف',

         ];
        $this->validate($request, $rules,$message);
        $user = $request->user();
        if($request->password != ''){
            if (Hash::check($request->input('current_password'), $user->password)) {
                // The passwords match...
                $user->password = bcrypt($request->input('password'));
                $user->save();
            }else {
                return redirect()->route('profile.index')->with(['error' => 'كلمة المرور الحالية غير صحيح، حاول مرة آخري ']);
            }
        }
        return redirect()->route('profile.index')->with(['message' => "تم تغير كلمة السر بنجاح"]);
    }
}
