<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index(){
        return view('pages.home');
    }

    public function sendContact(Request $request){
        $this->validate($request, [
            'email' => 'required|email'
        ]);
            
        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        if ($message) {
            return redirect('/')->with(array(
                'message' => 'Send message successfully!'
            ));
        }
    	return redirect('/')->with(array(
            'error' => 'Send message failed!'
        ));
    }
}
