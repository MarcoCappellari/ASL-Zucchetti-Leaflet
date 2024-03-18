<?php
$points = [
    2 => ['name' => "Entrata a scuola", 'lat' => 45.389164, 'long' => 11.900349],
    3 => ['name' => "Capannino", 'lat' => 45.389279, 'long' => 11.900009],
    4 => ['name' => "Campo basket", 'lat' => 45.389174, 'long' => 11.899732],
    5 => ['name' => "Campo pallavolo", 'lat' => 45.388891, 'long' => 11.899472],
    6 => ['name' => "Inizio pista", 'lat' => 45.388852, 'long' => 11.899060],
    7 => ['name' => "Fine pista", 'lat' => 45.389629, 'long' => 11.899812],
    8 => ['name' => "Cancello", 'lat' => 45.389814, 'long' => 11.900421],
    9 => ['name' => "Parcheggio", 'lat' => 45.389547, 'long' => 11.900404],
    10 => ['name' => "Paninaro", 'lat' => 45.389266, 'long' => 11.900549],
    11 => ['name' => "Auditorium", 'lat' => 45.388887, 'long' => 11.900226]
];

$my_txt = 'gruppo5_zucchetti.txt';
$fp = fopen($my_txt, 'w');

$risultato = '';

foreach ($_POST as $key => $value) {
    if ($value >= 2 && $value <= 11) {
        $point = $points[$value];
        $risultato .= "<p>Il $key punto è <strong>{$point['name']}</strong> e ha latitudine {$point['lat']} e longitudine {$point['long']}</p><br style='margin-bottom: 10px;'>";

        fwrite($fp, $point['lat'] . "|" . $point['long'] . "\n");
    }
}

fclose($fp);

echo $risultato;
?>
<button onclick="homehome()">Ritorna alla Home</button>

<script>
    function homehome() {
        location.href = 'menu.html';
    }
</script>
