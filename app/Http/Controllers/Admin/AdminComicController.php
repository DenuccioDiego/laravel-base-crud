<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class AdminComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ddd(Comic::all());
        $comics = Comic::paginate(6);
        return view('admin.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partials.create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_record = $request->validate([
            'title' => 'required|unique:comics|max:30',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|url',
            'price' => 'nullable|numeric',
            'series' => 'nullable|max:25',
        ]);
        //Comic::create($validated_record);

        //ddd($request->all());
        //ddd($validated_record);
        
        $record = new Comic();

        $record->title = $validated_record['title'];
        $record->description = $validated_record['description'];
        $record->thumb = $validated_record['thumb'];
        $record->price = $validated_record['price'];
        $record->series = $validated_record['series'];

        $record->save();

        return redirect()->route('record.show', $record->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //ddd($comic);
        
        return view('admin.partials.show_record', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //ddd($comic);
        return view('admin.partials.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $edit_record = $request->all();

        $comic->update($edit_record);
        
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin');
    }
}
