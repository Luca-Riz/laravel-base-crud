<?php

namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Comic::paginate(8);
        // dd($fumetti);
        return view('comics.index', compact('fumetti'));
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
        // dd($request->all());
        $data = $request->all();

        $newComic = new Comic;
        
        //? A - primo metodo per salvare i dati
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];

        //? B - secondo metodo per salvare i dati
        $newComic->fill($data); //! obbligatorio inserire i dati fillable nel model

        $newComic->save();

        //? una volta cliccato 'submit' sul form in 'create.blade.php' ci reindirizza in show con id del fumetto appena inserito
        return redirect()->route('comics.show', $newComic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic) //?Dependency injection
    {
        // $comic = Comic::find($id); //? non serve, servirebbe se non ci fosse la Dependency injection
        // dd($comic);
        if($comic){
            return view('comics.show',compact('comic'));
        }

        abort('404'); //? l'abort viene eseguito in ogni caso, anche se dovesse mancare questa riga di codice
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all());
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.index')->with('modifica', 'Hai appena modificato il fumetto id: ' . $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', 'Hai cancellato il fumetto id: '. $comic->id);
    }
}
