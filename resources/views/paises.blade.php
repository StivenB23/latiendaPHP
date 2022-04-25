<!doctype html>
<html lang="en">
  <head>
    <title>Paises</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
         
            <header class="text-center">
            <h1>Paises de la región</h1>
        </header>
        <table  class="table table-striped">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Capital</th>
                    <th>Moneda</th>
                    <th>Población</th>
                    <th>Num ciudades</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paises as $pais=>$infopais)
                    <tr>
                        <td scope="row">{{$pais}}</td>
                        <td>{{$infopais["capital"]}}</td>
                        <td>{{$infopais["moneda"]}}</td>
                        <td>{{$infopais["poblacion"]}}</td>
                        <td>
                        @foreach ($infopais["ciudades"] as  $clave => $valor)
                           <p>{{$valor}}</p> 
                        @endforeach
                        </td>
                        
                       
                    </tr>
                @endforeach
               
            </tbody>
            <tfoot>

            </tfoot>
        </table>
        
        </div>
     
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>