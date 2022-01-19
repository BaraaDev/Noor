<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\EmailSender;
use App\Models\Contact;
use App\Models\Contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function index(Request $request)
    {
        $contacts = Contact::orderBy('created_at','DESC')->where('is_read',0)->where(function ($q) use($request){
            if($request->keyword)
            {
                $q->where('name' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('phone' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('mail' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('subject' , 'LIKE' , '%'.$request->keyword.'%')
                    ->orWhere('message' , 'LIKE' , '%'.$request->keyword.'%');
            }
        })->paginate(25);
//         dd($contacts); toSql()
        return view('admin.email.index',compact('contacts','request'));
    }



    public function show($id)
    {
        $contact_us = Contact::findOrFail($id);
        if($contact_us->is_read == 0) {
            $contact_us->update(['is_read' => 1]);
        }
        return view('admin.email.show',compact('contact_us'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('email.index')
            ->with(['message' => "تم الحذف بنجاح"]);
    }

}
