<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = products::all();
        return view('productos', compact('productos'));
    }


    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
         return view('crear');
     }


     public function store(Request $request)
     {

        $validatedData = $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'status' => 'required'
        ]);

       $productos = new products($request->input());
       $productos->saveOrFail();
       return redirect('productos');
     }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productos = products::find($id);
        return view('editar', compact('productos'));
        return redirect()->route('ruta.index')->with('success', 'El registro se ha creado exitosamente.');


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Recuperar el producto correspondiente del modelo
        $producto = products::find($id);

        // Actualizar los atributos del producto con los datos de la solicitud
        $producto->name = $request->input('name');
        $producto->stock = $request->input('stock');
        $producto->status = $request->input('status');

        // Guardar los cambios en la base de datos
        $producto->save();

        // Redirigir al usuario a la vista de detalles del producto actualizado
        return redirect()->route('productos.index', ['id' => $producto->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Buscar el producto a eliminar en la base de datos
        $producto = products::find($id);

        // Eliminar el producto de la base de datos
        $producto->delete();

        // Redirigir al usuario a la vista de lista de productos
        return redirect()->route('productos.index');
    }

}
