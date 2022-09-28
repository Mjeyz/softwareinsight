<?php

namespace App\Http\Controllers;

use App\Models\newslater_emails;
use Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        if ( !Newsletter::isSubscribed($request->email) ) 
        {
            // newslater_emails::create($request->email);
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('Newslatter_success', 'Thanks For Subscribe');
        }
        return redirect('/')->with('Newslatter_failure', 'Sorry! You have already subscribed ');
            
    }
}
