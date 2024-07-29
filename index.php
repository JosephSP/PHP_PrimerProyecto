
<!-- Se utilizara api para obtener la proxima pelicula de marvel par estreno -->
<?php 
const API_URL = "https://whenisthenextmcufilm.com/api";


$ch = curl_init(API_URL); # inicia llamado cURL

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); #el resultado no lo mostrara por pantalla con esto
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For local testing, ignore SSL verification (not recommended for production)

$result = curl_exec($ch); #toma el resultado que devuelve la api
$data = json_decode($result, true); # decodifica el Json resultante
curl_close($ch); # cierra el llamado de la API




?>

<head>
    <title>"La proxima pelicula de marvel"</title>
    <meta name="description" content="La proxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>


<main>
    <section>
        <img src="<?=$data["poster_url"];?>" width="300" alt="poster de <?= $data["title"]; ?> " style="border-radius: 16px"/>
    </section>
    <hgroup>
        <h2>La proxima pelicula de marvel:<?php $data["title"];?></h2>
        <h3><?php $data["title"];?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p>fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
        <!-- <pre style="font-size: 12px; overflow:scroll; height: 250px; width:100%;">
         <?php var_dump($data);?>
    
        </pre> -->
    </hgroup>
</main>


<style>
    :root {
        color-scheme: light dark;
        text-align: center;
    }

    body {
        display: grid;
        place-content: center;
    }
    section {
        display: flex;
        justify-content: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    img {
        margin: 0 auto;
    }
</style>