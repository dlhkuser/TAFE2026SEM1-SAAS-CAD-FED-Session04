<?php

namespace App\Http\Controllers\StaticPages;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        //get the topics
        $topics = Topic::all();

        return view('web.static.contact-us')
            ->with('topics', $topics);
        //return view('static.index');
    }

    public function thankYou()
    {
        return view('web.static.thankyou');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        //TODO: Validate Data
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'subject' => ['required','max:128'],
            'message' => ['required'],
            'topic_id' => ['required','integer'],
        ]);

        //Store contact message
        Message::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
                'topic_id' => $validated['topic_id'],
            ]
        );
        return redirect()->route('web.static.thank-you');
    }
}
