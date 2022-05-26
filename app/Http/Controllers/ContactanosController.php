<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactanosController extends Controller
{
    
    public function index(){
        $logueado = Auth::user();
        if($logueado){
            return view('emails.formContactol');
        }else{
            return view('emails.formContacto');
        }
    }

    public function store(Request $request){

        
        $correo = new ContactanosMailable($request->all());
        

        Mail::to('DETEPTD@gmail.com')->send($correo);
        return redirect('/index')->with('correo', 'ok');
    }

}
