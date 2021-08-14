<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Http::get('https://aseguramiento-api.herokuapp.com/api/patient');
        $usuariosArray = $usuarios->json();
        return view('paciente.index',compact('usuariosArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPaciente = request()->except('_token');
        $response = Http::post('https://aseguramiento-api.herokuapp.com/api/patient',$datosPaciente);

        return redirect('paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $response = Http::get('https://aseguramiento-api.herokuapp.com/api/patient/',$id);
        return view('paciente.edit',compact('response'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPaciente = request()->except(['_token','_method']);
       $response = Http::patch('https://aseguramiento-api.herokuapp.com/api/patient/'.$id ,$datosPaciente);
        //return $datosPaciente;
        return redirect('paciente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::delete('https://aseguramiento-api.herokuapp.com/api/patient/'.$id);
        return redirect('paciente');
    }
}
