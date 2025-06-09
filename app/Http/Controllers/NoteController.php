<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = auth()->user()->notes;
    return view('notes.index', compact('notes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'title' => 'required',
        'body' => 'required',
        
    ]);
        auth()->user()->notes()->create($validated);
        return redirect()->route('notes.index')->with('success', 'Note created!');
        
        if ($note->user_id !== auth()->id()) {
        abort(403);
}



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
