<?php

// if ($registrosA) {
//     var_dump($registrosA);
// }

function ColorCelda($status) {
    switch ($status) {
        case 'Disponible':
            return "#198754"; // Verde (Disponible)
        case 'Reservado':
            return "#ffc107"; // Amarillo (Reservado)
        case 'No disponible':
            return "#dc3545"; // Rojo (No disponible)
        default:
            return "#6c757d"; // Gris por defecto (en caso de un estado no esperado)
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Laravel</title>
</head>

<body>
    <div style="height: 100vh" class="w-100 bg-light d-flex justify-content-center align-items-center">
        <div>
            <p class="display-5 text-center">Bus</p>
            <table style="width: 450px;" class="table table-bordered">
                <thead>
                    <tr class="">
                        <th style="background-color: black; color:white; text-align:center" scope="col">1</th>
                        <th style="background-color: black; color:white; text-align:center" scope="col">2</th>
                        <th style="background-color: black; color:white; text-align:center" scope="col">3</th>
                        <th style="background-color: #424242; color:white; text-align:center" scope="col">4</th>
                        <th style="background-color: #424242; color:white; text-align:center" scope="col">5</th>
                        <th style="background-color: #424242; color:white; text-align:center" scope="col">6</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        @foreach ($registrosA as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosB as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosC as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosD as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosE as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosF as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosG as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosH as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosI as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($registrosJ as $reg)
                        <th style="background-color: {{ ColorCelda($reg->estado) }}" class="text-center">{{ $reg->asiento }}</th>
                        @endforeach
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
