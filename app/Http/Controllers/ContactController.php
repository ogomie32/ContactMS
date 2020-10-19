<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use App\Mail\Mailme;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $contacts = Contact::get();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contacts.show', ['contact' => $contact]);
    }

    public function create() 
    {
        return view('contacts.create');
    }
    public function store() 
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'image' => 'file'
        ]);

        $conImageUrl = null;
        if(request('image')){
            $conImageUrl = request('image')->store('contactimages');
        }

        // dd($conImageUrl);

        Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'image' => $conImageUrl,
            'tel' => request('tel')
        ]);

        return redirect('/contacts');
    }

    public function mailto() 
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new Mailme());

        return redirect('/mail')->with('sent_mail', 'Mail Sent');
    }

    public function edit($id) 
    {
        $contact = Contact::find($id);

        return view('/contacts.edit', ['contact' => $contact]);

    }

    public function update($id) 
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'file',
            'tel' => 'required'
           
        ]);

        $conImageUrl = null;
        if(request('image')) {
            $conImageUrl = request('image')->store('contactimages');
        }
        $contact = Contact::find($id);

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->image = $conImageUrl;
        $contact->tel = request('tel');
        $contact->frequent_contacts = request('frequent_contacts');

        $contact->save();

        // $path = route('contacts.show', $contact);

        return redirect("/contacts")->with(['updated_name' => $contact->name]);
        // return view('contact.success');
    }

    public function display() 
    {
        $contacts = Contact::where('frequent_contacts', true)->get();

        return view('contacts.favorite', ['contacts' => $contacts]);
    }
    
    public function favorite($id)
    {
       $contact = Contact::find($id);
       $contact->frequent_contacts = true;

       $contact->save();

       return redirect()->back();
    }

    public function unfavorite($id)
    {
        $contact = Contact::find($id);
       $contact->frequent_contacts = false;

       $contact->save();

       return redirect()->back();
    }
        
}
