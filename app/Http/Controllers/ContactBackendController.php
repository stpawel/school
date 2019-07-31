<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactBackendController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact.list',['contacts' =>$contacts]);
    }
    
    public function add()
    {
        return view('backend.contact.add');
    }
    
    public function create(Request $request)
    {    
        $request->validate([
			'position' => 'required',
			'name' => 'required',
                        'surname' => 'required',
                        'phone' => 'required',
		]);
       
        $contact = new Contact();
        $contact->position = $request->input('position');
        $contact->name= $request->input('name');
        $contact->surname=$request->input('surname');
        $contact->phone=$request->input('phone');
        $contact->save();
        
        return redirect()->action('ContactBackendController@index');
    }
    
    public function delete($id)
    {
        Contact::destroy($id);
        
        return redirect()->action('ContactBackendController@index');
    }
    
    public function edit($id)
    {
        $contact=Contact::find($id);
        
        return view('backend.contact.edit',['contact' => $contact]);
    }
    
    public function update(Request $request)
    {
        $request->validate([
			'position' => 'required',
			'name' => 'required',
                        'surname' => 'required',
                        'phone' => 'required',
		]);
           
        $contact = Contact::find($request->input('id'));
        $contact->position = $request->input('position');
        $contact->name= $request->input('name');
        $contact->surname=$request->input('surname');
        $contact->phone=$request->input('phone');
        $contact->save();
        
        return redirect()->action('ContactBackendController@index');
    }
}