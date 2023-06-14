<?php

    namespace App\Http\Controllers;
    use App\Models\User;
    
    use Illuminate\Http\Request;
    
    class UserController extends Controller
    {
    /**
     * Mostrar una lista del recurso.
     */
    public function index()
    {
        $users= User::all();
       return $users;
    }

    /**
     * Almacenar un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostrar el recurso especificado.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Eliminar el recurso especificado del almacenamiento.
     */
    public function destroy(string $id)
    {
        //
    }
}
