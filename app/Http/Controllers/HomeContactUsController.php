<?php

namespace App\Http\Controllers;

use App\Models\HomeContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeContactUsController extends Controller
{
    public function contactPost(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'company_name',
            'phone', 
            'email' => 'required|email',
            'message' => 'required'
        ]);
        HomeContactUs::create($req->all());
        
        Mail::send('email', [
            'name' => $req->get('name'),
            'company_name' => $req->get('company_name'),
            'phone' => $req->get('phone'),
            'email' => $req->get('email'),
            'message' => $req->get('message')],
            function ($message) {
                $message->from('admin@tsi.com');
                $message->to('thisismjey@gmail.com', 'The Software Insight')
                ->subject('Message from home contact page');

            }
        );
        return back()->with('home_contact_success', 'Thanks for contacting us, we will reach to you ASAP');
    }
}
