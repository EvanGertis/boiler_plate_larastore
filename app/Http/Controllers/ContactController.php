<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('/contact/show');
    }

    public function sendMail(Request $request)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'min:3'],
            'message' => ['required', 'min:3']
        ]);

        Mail::to("physevangertis@gmail.com")->send(new ContactMessage($request));

        return redirect('/contact');
    }
}
