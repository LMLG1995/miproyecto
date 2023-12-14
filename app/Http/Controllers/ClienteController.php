<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCliente;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        
        $clientes = \App\Models\Cliente::all();

        
        return view('blog', compact('clientes'));
    }

    public function create(){
        return view('clientes.create', ['cliente' => new Cliente]);
    }

    public function store(RequestCliente $request)
    {
        // $validated = $request->validate([
        //     'nombre'=>['required', 'string', 'max:255'],
        //     'apellido_paterno'=>['required', 'string', 'max:255'],
        //     'apellido_materno'=>['required', 'string', 'max:255'],
        //     'telefono'=>['required','required','string','max:20', ],
        //     'correo'=>['required','string', 'email', 'max:255'],
        
        // Cliente::create($request->all());

        // Cliente::create([
        //     'nombre' => $request->input('nombre'),
        //     'apellido_paterno' => $request->input('apellido_paterno'),
        //     'apellido_materno' => $request->input('apellido_materno'),
        //     'telefono' => $request->input('telefono'),
        //     'correo' => $request->input('correo')
        // ]);
        
        // Cliente::create($validated);

        Cliente::create($request -> validated());
        
        return to_route('blog')->with('status', 'Post created!');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', ['cliente' => $cliente]);
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(RequestCliente $request, Cliente $cliente){

        // $validated = $request->validate([
        //     'nombre'=>['required', 'string', 'max:255'],
        //     'apellido_paterno'=>['required', 'string', 'max:255'],
        //     'apellido_materno'=>['required', 'string', 'max:255'],
        //     'telefono'=>['required','required','string','max:20', ],
        //     'correo'=>['required','string', 'email', 'max:255'],
            

        // ]);

        // $cliente->nombre = $request->input('nombre');
        // $cliente->apellido_paterno = $request->input('apellido_paterno');
        // $cliente->apellido_materno = $request->input('apellido_materno');
        // $cliente->telefono = $request->input('telefono');
        // $cliente->correo = $request->input('correo');
        // $cliente->save();

        // $cliente->update($validated);        
        $cliente->update($request -> validated());

        return to_route('blog')->with('status', 'Cliente update!');
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return to_route('blog')->with('status','Cliente deleted');
    }
}
