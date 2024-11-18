<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AccueilController extends Controller
{
    public function index(){
        return view('index');
    }

    public function storeEmail(Request $request){
        //dd('stop');
        //dd($request->validated());
        $validator = Validator::make([
            'email' => $request->input('email'),
         ],[
             'email' => ['required', Rule::unique('emails')],
         ]);
        Email::create($validator->validated());

        return redirect()->back()->with('success', "Votre email a été enregistré.");
    }
}
