<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Primera Ruta
Route::get('Hola', function(){
    return view('Hello');
});

Route::get('arreglo',function ()
{
    $estudiantes=["AN"=>"Ana",
                  "JU"=>"Juana",
                  "PA"=>"Paola"];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    echo "<hr />";
    // Agregar posicición
    $estudiantes["ST"]="Stive";
    // array_push($estudiantes, "Gato");
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    echo "<hr />";
    // retirar elementos de un arreglo
    unset($estudiantes["JU"]);
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get('paises', function ()
{
    
    $paises=[
        "Colombia"=>["capital"=>"Bogotá", "moneda"=>"peso","poblacion"=>51.6,"ciudades"=>["Bogotá","Medellín"]],
        "Peru"=>["capital"=>"Lima","moneda"=>"sol","poblacion"=>32.97 . " millones","ciudades"=>["Cusco","Trujillo"]],
        "Japón"=>["capital"=>"Tokyo","moneda"=>"yen","poblacion"=>15.8 ." millones","ciudades"=>["Kioto","Osaka","Nagoya"]],
        "Mexico"=>["capital"=>"CDM","moneda"=>"peso","poblacion"=>"value","ciudades"=>["Chiapas","Manzanillo"]],
        "España"=>["capital"=>"Madrid","moneda"=>"euro","poblacion"=>"value","ciudades"=>["Castilla"]],
        "EEUU"=>["capital"=>"washington","moneda"=>"dolar","poblacion"=>"value","ciudades"=>["California","Vegas"]],
    ];
    // echo "<pre>";
    // var_dump($paises);
    // echo "</pre>";
    // echo "<hr />";
    // foreach ($paises as $pais =>$infopais) {
    //     echo "<h1 style=\"color:#33B8FF; font-family:Arial; \"> $pais </h1>";
    //     // echo "Capital: ".$infopais["capital"]."\n Moneda: ".$infopais["moneda"]."\n Población: ".$infopais["poblacion"];
    //     foreach ($infopais as $clave => $valor) {
    //         echo "$clave: $valor <br>";
    //     }
    // }
    // Mostrar la vista
    return view("paises")->with("paises", $paises) ;
});
?>