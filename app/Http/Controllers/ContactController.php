<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function post(Request $request)
    {
        $form = $request->all();
        contact::create($form);
        return view('thanks');
    }
}
