<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactFrontedController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        
        return view('fronted.kontakt.list',['contacts' => $contacts]);
    }
}
