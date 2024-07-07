<?php

#Iniciar una nueva sesion de curl

const APIURL = "https://whenisthenextmcufilm.com/api";

$curl = curl_init(APIURL);


//Indicar resultado pero no en pantalla


curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


//Ejecutar la peticion
$result = curl_exec($curl);

//Transformar resultado

$mcuFilm = json_decode($result, true);

//Cerrar conexion

curl_close($curl);

//Mostrar datos


//var_dump($mcuFilm);
?>

<!-- <h1>la proxima peli de marvel</h1> -->

<head>
    <meta charset="utf8_decode">
    <title>Proyecto Marvel</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<main>
    <!-- <pre style="font-size: 8px; overflow: scroll;">
       
    </pre> -->
    <section>

        <div class="card" style="width: 18rem;">
            <img src=<?php
                    echo $mcuFilm["poster_url"] ?> alt="" style="border-radius: 16px; width: 300px;" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php echo $mcuFilm["overview"] ?></p>
            </div>
        </div>

    </section>

    <hgroup>
        <h1>La proxima Peli de Marvel es <?php echo $mcuFilm["title"]  ?></h1>
        <H2>la fecha de Estreno es la siguiente <?php echo  $mcuFilm["release_date"]  ?></H2>
        <p>Se espera que la siguiente pelicula de marvel sea <?php echo $mcuFilm["following_production"]["title"]  ?></p>
        <p>Faltan <?php echo $mcuFilm["following_production"]["days_until"] ?> dias para su estreno</p>




    </hgroup>

</main>

<style>
    :root {
        color-scheme: light dark;
        background-color: black;
    }

    body {
        display: grid;
        place-content: center;
    }

    .card {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
  
