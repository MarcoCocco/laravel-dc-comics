<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $formData = $request->all();
        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
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
        $this->validation($request);
        $formData = $request->all();
        $comic->update($formData);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
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

        return redirect()->route('home');
    }

    //creo funzione di validazione
    private function validation($request)
    {

      /*   $request->validate([
            'title' => 'required|max:150|min:10',
            'description' => 'required|min:10',
            'thumb' => 'required|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:20'
        ]); */

        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|max:150|min:10',
            'description' => 'required|min:10',
            'thumb' => 'required|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:20',
        ], [
            'title.required' => 'Inserisci un titolo.',
            'title.max' => 'Il titolo non deve essere più lungo di 150 caratteri.',
            'title.min' => 'Il titolo non deve essere più corto di 10 caratteri.',
            'description.required' => 'Inserisci una descrizione.', 
            'description.max' => 'La descrizione deve avere minimo 10 caratteri.',
            'thumb.required' => "Devi inserire il link di un'immagine.",
            'thumb.max' => 'Il link non può conterenere più di 255 caratteri.',
            'price.required' => 'Inserisci un prezzo.',
            'series.required' => "Inserisci la serie di cui fa parte l'albo.",
            'sale_date.required' => 'Inserisci una data.',
            'type.required' => 'Inserisci il tipo di albo.',
        ])->validate();

        return $validator;

    }
}
