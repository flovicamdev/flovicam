<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\FormContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(FormContactRequest $request){
        //dd('stop');
        //dd($request->validated());
        Contact::create($request->validated());

        return redirect()->back()->with('success', "Message envoyé");
    }
}
