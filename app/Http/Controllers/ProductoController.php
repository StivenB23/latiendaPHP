<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "Aquí va la lista de productos \n";
        return "HOLA";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Seleccionar marcas y categorias de la base de datos
        $marcas= Marca::all();
        $categorias= Categoria::all();
        // Las enviamos a la vista
      return  view('products.new')->with('categorias',$categorias)->with('marcas',$marcas) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Acceder a los datos del formulario
        //
        // Crear un objeto
        
        // echo "<pre>";
        //     var_dump($request->nombre);
        //     var_dump($request->description);
        //     var_dump($request->precio);
        //     var_dump($request->image);

        // echo "</pre>";
        $archivo=$request->image;
        $nombre_archivo=$archivo->getClientOriginalName();
        // var_dump($nombre_archivo);
        // Mover el archivo a la carpeta "public/img"
        $ruta = public_path();
        var_dump($ruta);
        $archivo->move("$ruta/img/",$nombre_archivo);
        // registrar producto
        $producto=new Producto;
        $producto->nombre=$request->nombre;
        $producto->imagen=$nombre_archivo;
        $producto->descripcion=$request->description;
        $producto->precio=$request->precio;
        $producto->marca_id=$request->marca;
        $producto->categoria_id=$request->categoria;
        $producto->save();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Producto: ".$producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        //
        return "Edit Producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
