<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index(){
        return view('emails.formContacto');
    }

    public function store(Request $request){

        
        $correo = new ContactanosMailable($request->all());
        

        Mail::to('DETEPTD@gmail.com')->send($correo);
        return redirect('/index')->with('correo', 'ok');
    }

}
