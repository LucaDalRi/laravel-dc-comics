<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:100|min:3',
            'description' => 'required|min:5',
            'thumb' => 'nullable',
            'price' => 'required|numeric|min:0.99',
            'series' => 'required|max:50|min:3',
            'sale_date' => 'date|required',
            'type' => 'max:100|min:3|nullable'
        ]);

        $data = $request->all();

        $singleComics = new Comic;
        $singleComics->title = $data['title'];
        $singleComics->description = $data['description'];
        $singleComics->thumb = $data['thumb'];
        $singleComics->price = $data['price'];
        $singleComics->series = $data['series'];
        $singleComics->sale_date = $data['sale_date'];
        $singleComics->type = $data['type'];
        $singleComics->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:100|min:3',
            'description' => 'required|min:5',
            'thumb' => 'nullable',
            'price' => 'required|numeric|min:0.99',
            'series' => 'required|max:50|min:3',
            'sale_date' => 'date|required',
            'type' => 'max:100|min:3|nullable'
        ]);

        $comic = Comic::findOrFail($id);

        $data = $request->all();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];  
        $comic->type = $data['type'];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
