<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->number = $request->number;

        $user = auth()->user();
        $contact->user_id = $user->id;
        
        $contact->save();

        return redirect()->route('contact.create')->with('mensagem', 'Contato criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact_show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact_edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->name = $request->name;
        $contact->number = $request->number;

        $contact->save();

        return redirect()->route('home.index')->with('msg-edit', 'Contato atualizado!');
    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('home.index')->with('mensagem', 'Contato excluido com sucesso');
    }
}
