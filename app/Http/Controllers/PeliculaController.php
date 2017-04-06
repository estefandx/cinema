<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
use Illuminate\Support\Facades\Input;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $peliculas = Pelicula::paginate(5);
        return view('peliculas.list',compact('peliculas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        return view('peliculas.create',compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = Input::file('imagen');
        $aleatorio = str_random(10);
        $nombre = $aleatorio.$file->getClientOriginalName();
        //$file->move('peliculas',$nombre);
        \Storage::disk('local')->put($nombre,  \File::get($file));

        Pelicula::create([
           'nombre' => $request['nombre'],
            'sinopsis' => $request['sinopsis'],
            'duracion' =>$request['duracion'],
            'url_imagen' => $nombre,
            'genero_id' => $request['genero_id'],
        ]);

        redirect('/pelicula');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
