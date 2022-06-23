<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::all();
        //
        // echo "Aquí va la lista de productos \n";
        return view('products/list')->with("productos",$productos);
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

        // Validaciones
        /*
        *1. Establecer las reglas de validación a aplicar 
        *   para la 'input data'  
        */
        $msg = [];
        $reglas=[
            "nombre" => 'required|alpha|unique:productos,nombre',
            "description" => 'required|min:5|max:10|unique:productos,nombre',
            "precio"=>'required|numeric',
            "image"=>'required|image|unique:productos,imagen',
            "categoria"=>'required',
            'marca'=>'required'
        ];
        // 2. crear el objeto validador
        $v = Validator::make($request->all(), $reglas, $msg=[
            'required' =>'Este campo :attribute es requerido',
            'min' => 'El campo debe tener minimo :min y maximo :max caracteres',
            'numeric' => 'El campo :attribute debe ser numerico',
            'unique' =>'El dato ingresado en el campo :attribute ya existe'
        ]);

        //3. validar
        //fails() retorna. tru: si la validación falla y false si la validación es valida
       if ($v->fails()) {
            //Validación incorrecta
            // mostrar la vista new, pero llevando los errrores
            return redirect('productos/create')->withErrors($v);
            var_dump($v->errors());
       } else {
            // validación correcta
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
            return redirect('/productos');
       }
 



        
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
