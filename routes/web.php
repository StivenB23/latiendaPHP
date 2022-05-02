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
        "Colombia"=>["imagen"=>"https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg","capital"=>"Bogotá", "moneda"=>"peso","poblacion"=>51.6,"ciudades"=>["Bogotá","Medellín"]],
        "Japón"=>["imagen"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Flag_of_Peru_%28state%29.svg/800px-Flag_of_Peru_%28state%29.svg.png","capital"=>"Tokyo","moneda"=>"yen","poblacion"=>15.8,"ciudades"=>["Kioto","Osaka","Nagoya"]],
        "Mexico"=>["imagen"=>"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASkAAACqCAMAAADGFElyAAACQFBMVEUAaEfOESb///8AWC7KAAD5qlEAAAD6+vj8rVKQRiD6+veOQx2NRSD9/v/Mzq4zAADu7+ecoWjwwjvNz7Wan2MAhIkAfYLnlkmfpGyPlVTb3t/MmlvYrGzv8fKpbD07KCA9JhktIhyCPBpsOSChb0JLKRTo6OEAFx+DQiCKNAAmIR3jsxm4uZGbVixsSC5FIQ1mbRLDxa9zcG5aLxagoaFOLh4AY2SEikUvw93ei0Rnb3nb3c6Jj0htcyyQlVrSzs2gh4GpnJm/ubnXyr3LtaeSRgDCjVCxdTyXeG60gD+bYji4gEt+MwCvl4+cd0pvMxbAsZ6TTACnZxm3eTKJYTd7VEW0lnPmxJqwfl+mYQB/Xz7Xs40XHiDg0ayxg1myd0W4j1nIkU2RdU5AOCz+3a8wEw8QDhd9UDDajFumYCOFhoawj1yhWSjKil61b01ZMR2OWiWBaEX87sfv0ZD93439zDWzt4TFq0rBhRjhr0qATBmionnTuVXgtCtsUTjyyGKRbipgJABZRS2HfXBAEgCUZUxnUEQpBgC5rYe9k4PaxIyPTy9tGQBJBQDZvnFOKgz60NYiDQ3znpzsZyHudABqWSjwbFj1jKKagCxXRj/yhID6wcrQnSdmNwDvgJLD29mnhBJCR1P8ZX7AdIRXrK6AqqnvhTlfjo/xe1aGsrH5rrpFZ2TKoKcAOziPcX9tiIb9xhM1MR19rszG2ec8lLznxrbisZVnu9jEYiU1latYfY2toEWd0eV/qJbZWmNOjXYeLotHAAAMuklEQVR4nO3c+1caVx4A8OxtFHmZ4aEywMDICBIdBMRhdKdA1QQiJJJVkjbGt0kpxi4WI9mIxDzbRBtj0m7TNGntA8ua7G66sdtuWtv91/bewWwfiWa75+QX5l5zZMCZOYfP+X6/93svnOza9cLHS+DFj92/e+HjxUNhKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSlJSoVeOfBKZ5cRS+08qO59+00mUziy33agS42ltofqCY+4zHBEYyNT+w8eorDUMwaKoH2m3pa43GKxNDCuqEWuPNiJpZ4ehxXdIPSHvv4ExyiVShXToIwpY3uPhELPLVnSkuqmjr76GgXr1GvH+nvSKhVjbeQGlCMqZTjy3BSUipQM/drX3R01uXr6jwtE6FikYUApVw020Vwiau7t3YelEJPOMIQehkdNI+HoqGlsbJzq7uuLjajkVrqedieaJsx7DzxnEpSClKy6WncCPh4eM4dNTrM5Ehk/Wak+1pMw2RjaamtI9qatryctyZ2ppCDFVrMOAube2BujjDyRSJgiKcY32deXGkXpZ1WNNtptXOOpqSM7UklBypDVAZ0i1P/mHw/a0s6pSKQnlXK6I5HpUZdK1UQz8rfq7SquMbn3gNSlqrNZlgDHM8dfGz4edU71LJn6U8o5ui/S63Iy9XanZSAOqdJNiamdGispSOlY1uGYyZye1eZnta/MjUyNmWJT0y39fbGoUl5ff2PAJodUcvuEa+8OXZUUpISsgT2TWWjO9/zprOAIm/vNpvGJlsb+uVGXU2WlmYZGp5yx+lT2tPKItKUU+lzuTObMfD7fDcCr5lFTwnzO6mpMJcJKp5VuGG/hBhmVj3bG6d79XZKWAjJC4Vg4y843LwJwPGwJ9yblVlX9QEypkrcMOt9yq+xWuYqzy9MtLkbaUqLWq4dzZ+cBFTZbYg0WOa3yLSnl8XSyN3rRCmsUp4zT8Qb30t6Q5KUA8ObOXwXHTWaTKTZi81mdPpUc9ggNnDJJp13ucxafO5b2bV+ppCPlZdnzCtnwKfMps+WcPN1E0yqGHjg53Oi0JJlRS9K1pLIk3Kptg6rMpYQnbbcil2WDBFAnkuM+0zlubpCj7XGOdp1KDviGzSpX+NRIy7nhxEBUmZSk1HJzfkHcRRByLGyq4NIvNTKsHE0o5+o5u72eiVs4myVpM517K2yfiDhfT3Hjoy7u2Rsw5S7VvMgKEAo6wTYdgGmL2aI0W1xztN3O0VxDy5zTNBoNJ0/Oxelwyt7j9LlvbpN+5S2lGJpZhstjEDRkc+i5LBI1hZWmGFwi22m6nmacKXk0dnJiyj2Qcvem4r2ptOVCmxSl0NBV6xxsda705GgMLmRM5si0ytcU5+xpW2pqqWXKGlPRPfGLKdVEv89pa5WuVLUQzB4uPemK9Jj6p8090/UMbMrphoi5e298PEVPxy9OuRklnYhzKqtEpWQQSshd3ZKi+lLmnsRFk4+moxejvljvJdC99O7koctXLrztpK/YBt92q96RqJRQzQIHe/V86Zn6KOcyR91NUdrdy5hcI9abRgCuMeDQ5IHWfRfalCepPU7JSrHVAGSzfT2Li/NnF9WgU8W0xOlz0TQTa0i+VX8D1e8lozpOtTje7Vq6DvY4pZp9gk6nA91sT19/XqttXgbXbkzRDT5fb3w0Zhq9ab2A6rfjErhiPGI82HYNStkmpSQlCDx6yKAWCtYpFghXjx37Uz6fb5Z1H+RU9IjFHY6aL/Y2cb630YltoVDnvjbb5KHr6suXt/opLyEFqaCHRQ/L6BMZhS6LegSFjDB6F5oFcC2RVrWYRpZ6zYNuOp12X0JnysCksfVK677rlP0d1KITQOapLn8przeoFwSRilqBv6+yWQWMs68qhZ7+ecfx4VG3M2puuDnoo9N2X/oGJ24JU7LWzjuh69SdPaWcFTxZtvylPHyQFHPn1nvvo6jSGwSQac7/Wds/fW/mWiQmH2QmzvkGOc7HMBz98Z4u8bIu4zvqPcZWNzomSDagCQhlLuUggqRBgY4+ev+D20AMKq8DFqlZ7b0P8zNDJtPUdCPTyNBNjI9xpjl6bs+l0pWtoNXYekeMKTIY1PDVZS4FQ4o0kIhq5aP7d++iV+Bq5oxW++GsNq+91x82WfpomrEy1jjjdHK+dP30x5xDjCpY2ttaS1K8JsjrylwKeAO8vjRxyW6vfLLahrrP6uVPKz8bygtnz471902llINMnFHZnVALpiDN+MQMbEOToChFBHgNr1eUuxSk0ihmMujo7udfFArraL/TawyBGQBC15ZSffv37zVO2OROJ22tt8KoitfPTaMMhDFlLEkBL4zLX7YJ5SiVIVg201x6n/7a2trCmnhIORbFcNmf7DS+S1EHfZzVbqVpSGWP0/a5Gy0wAyepLtR4Zk6o+V/OfOUpNfRVhs0I4l6nsbYGUhUfouMvv/xg5ckpsGeSVd6op63uO27aBqm4lukbMAONsK9CUvNEDpwo/5gCmcXlxS0Rf7G2WFMsIpr7n/xl5edntV1203RlqNVNOzlYqawf+yrb0PwnjuUzy8uZ8peCYfWkFery18CwWjOura/fX0HzIPXTVw+snZfPd6nBhPukzX7ywoXPJtoAkdn6iEJQ/PqWZSoFe2xZ6egBiqrCWqFYuH3/r4BSd/1t3RgSFywKx8yn97QEoCa77txpmwyhnDxzGl2jYHX8r+9YrlLZYEDgS2Gx6vf7i7Ba1fz9i/UieLgGowvWLapttjmf12rzzT+Vo5X33xCPHQF9QA8ESayQNQY9n/N4S0+MlHENpqC/pqamUFtAZsW1tc8q87ANhY17XvsV+g6o+qEM3P/8PTGiPHqeN7BSmPtgZlUbyMDPWuzVWn8BlisUWg8QVU2huFa8N/u9v1gszuYrQ6BrvVBze+W2WPG9vCYQJMlfF6rylAJ6VhMMeP+7wg11Ff21/ho/NKpBYDC+CoP/yPvXYSo+KE62GYsQ8fPbpY9EWZIPaJ5qp8pVSqeHUp5SpVGIG3rG1tWQERRh6iEs+O/Bg7UCYisUQ8b1dRRv61vXkoEgTzokIgUUOgPJAy1KocxCZkac+42PNuBUiHrRmlp/7fqaGFuwL11fQ6lZU1MsTYkKng8+HVJlKyXT6TS5jFiswenTC+2b8PER/KG61lAiPjQWYGWCAx7DcEI9V22RQo1F8wnAkzz79Beuy1UKDrVBtlw6yji+bW/fVKu/fiS+jjaDoRTsSYvrqzJqzQ8Xh37/kw/ZFwH5dNtZ1lIZraCZEcBWq7DR3t4OuYygu+6bf8JxeL3wsHa1VIxC1OoqJRPLOXxBMS88427lLDXUPDTE5nJB8X1T1Ga7ODbfrOuoq+ioGoOl6UFHxTfiqVTm9OnSRQbg0OmG8jOSkkJZJpC8xxGUAerRo8clqfZiVUVVR1XHGKxN4xUVwxsbmzDUZhfE1bCCZ1n0kQwhrewT3zph4L2wV4dSVMmk/WhVRUVFXUdVQ3Kpo6pqDSXlJpURoYhAMBDQVxPPvld5SxkMQdITyMH4Ks1lmyWpqo6KurqqKhhdnRAKbG6If5RBqKBB43lWQJW9FMFmDbA30gExTjIEDKrHFaX0gz/wCOXk19QjCigUwEvyeoOG129zr/KWAoKuGq5NeNAMG6sFYga6tKFoqqiDCVhRVVd3CNb4jUeweVheQOs9yEo+e+YreykHSWb1fICAFVsxswCnNOqbqo4v0eRXV9VR96+qoxtbJ6pnAIlMs9tBlbsUIARgEHS5oZ92eo3fPv7uu9+L4zHqNglvDn1pdp71CgIh2/ZGZS+FxszC0PdDAuHxektbVhubWwNtFHs9pCboFRzZhR3vIQkpYqGZADlPMOfxBj0CslKAH8Ct0h+9Hj0ZCPAvs0B2dmcrCUihZZ6BJ4OwCgV42DMYgiy5C/x41MAKQo6HTqRBgzb9iG0aKSlJAYVDB1iS1ZD6IJkVCJaFUld1CiFI8jxsoYJBje45d5CKFEB7ewJBGnQvCzJDTvHDv8HuFQfkYV/WB3me3K4vl6QUQJ9DKCCOTkftWgU/3tp9C+QcQNBDvh1mPGlKgdJ/WqJ+iaB2M6vg/u6VJy9hqWeO1VWw+65i16516u5vuUyCUnCgYDKu/rZrpCn1/wwshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWlsBSWwlJYCkthKSyFpbAUlsJSWApLYSkshaWwFJbCUlgKS2EpLIWl/ofxHx0dgLFaUTPxAAAAAElFTkSuQmCC","capital"=>"CDM","moneda"=>"peso","poblacion"=>20.5,"ciudades"=>["Chiapas","Manzanillo"]],
        "España"=>["imagen"=>"data:image/png;base64,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","capital"=>"Madrid","moneda"=>"euro","poblacion"=>33.0,"ciudades"=>["Castilla"]],
        "EEUU"=>["imagen"=>"data:image/png;base64,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","capital"=>"washington","moneda"=>"dolar","poblacion"=>10,"ciudades"=>["California","Vegas"]],
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