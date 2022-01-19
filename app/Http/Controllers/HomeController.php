<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Icon;
use App\Models\News;
use App\Models\Project;
use App\Models\RealEstate;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $icons          =  Icon::status(1)->limit(3)->get();
        $services       = Service::status(1)->limit(9)->get();
        $projects       = Project::status(1)->limit(10)->get();
        $categories     = Category::status(1)->limit(6)->get();
        $real_estates   = RealEstate::status(1)->limit(6)->latest()->get();
        $users          = User::isadmin('admin')->limit(3)->get();
        visit('visit_site');

        return view('welcome',compact('icons','services','projects','categories','real_estates','users'));
    }

    public function news()
    {
        $news = News::status(1)->limit(30)->get();

        return view('news',compact('news'));
    }

    public function newsShow($id)
    {
        $news = News::status(1)->findOrFail($id);

        return view('news_show',compact('news'));
    }


    public function real_estate()
    {
        $real_estates = RealEstate::status(1)->limit(30)->get();

        return view('real_estate',compact('real_estates'));
    }

    public function real_estateShow($id)
    {
        $real_estate = RealEstate::status(1)->findOrFail($id);

        return view('real_estate_show',compact('real_estate'));
    }

    public function portfolio()
    {
        $projects = Project::status(1)->limit(30)->get();

        return view('portfolio',compact('projects'));
    }

    public function service()
    {
        $services = Service::status(1)->limit(30)->get();

        return view('services',compact('services'));
    }

    public function about()
    {
        $icons = Icon::status(1)->limit(30)->get();
        $users          = User::isadmin('admin')->limit(3)->get();

        return view('about',compact('icons','users'));
    }

    public function bursa()
    {
        return view('bursa');
    }

    public function nationality()
    {
        return view('nationality');
    }


    public function contact()
    {
        return view('contact');
    }

    public function contactPost(ContactRequest $request)
    {
        Contact::create($request->all());

        return redirect()->back()->with(['message' => 'تم إرسال الرسالة']);
    }
}
