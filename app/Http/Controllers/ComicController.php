<?php

namespace App\Http\Controllers;

use App\Models\DcComics;
use Illuminate\Http\Request;
use App\Functions\Helper;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = DcComics:: all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $new_comic = new DcComics();

        $new_comic -> fill($data);

        $new_comic->slug = Helper::generateSlug($new_comic->title, DcComics::class);

        $new_comic->save();

        return redirect()->route('dc_comics.show', $new_comic->id);
        // $new_comic->img = $data['img'];
        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->price = floatval(str_replace('$', '', $data['price']));
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = DcComics:: find($id);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_comic = DcComics::find($id);
        return view('comics.edit', compact('edit_comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $comic= DcComics::find($id);
        if($data['title'] = $comic->title){
            $data ['slug']= $comic ->slug;
        } else {
            $data['slug'] = Helper::generateSlug($data['title']. DcComics::class);
        }

        $comic->update($data);
        return redirect()->route('dc_comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = DcComics:: find($id);
        $comic -> delete();
        return redirect()->route('dc_comics.index');
    }
}
