<?php
$name = "miguel ";
$output = "Hola $name";
$age = 10;

$isMiguel = $name == "miguel";
$isMiguelResult = $isMiguel
    ? 'yes miguel'
    : 'no miguel no no no';

$outputAge1 = match ($age) {
    1, 2, 3, 4 => "baby $name :baby:",
    5, 6, 7, 8, 9, 10 => "niño $name :boy:",
    11, 12, 13, 14, 15, 16, 17, 18 => "adolecente $name",
    19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "adulto joven $name",
    default => "adulto $name",
};

$outputAge2 = match (true) {
    $age < 2 => "baby $name :baby:",
    $age < 10 => "niño $name :boy:",
    $age < 18 => "adolecente $name",
    $age < 30 => "adulto joven $name",
    default => "adulto $name",
};

# Arrays:
$bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
$bestLanguages[] = "Java"; # Agrega java al final
$bestLanguages[3] = "TypeScript"; # Remplazara 1 por TypeScript en la posicion 3 

# Array como si fuera diccionario:
$person = [
    "name" => "miguel",
    "age" => "70",
    "isDev"=> true,
    "languages" => ["PHP", "JavaScript", "Python"],
];

$person['languages'][2] = 'Java'; #acceder a array dentro de array



?>

<!-- iteracion de arrays -->
<ul>
    <?php foreach ($bestLanguages as $key => $lang): ?>
        <li><?= $key . " " . $lang ?></li>
    <?php endforeach; ?>
</ul>

<h1>
    <?= "asd mi primera app ";

    ?>
    <?= $name . 1 . " " . (42 + 50);

    ?>

</h1>


<?php
var_dump($name);
gettype($name);
?>

<h2>
    <?= gettype($name);

    ?>
</h2>

<p>
    <?= $output . "  //  " . $isMiguel;
    ?>
</p>

<?php
if ($isMiguel) {
    echo "<h2> Hay Miguel, migueeeeeel<h2>";
} elseif (!$isMiguel) {
    echo "<h2> no miguel</h2>";
} else {
    echo "<h2> no persom?</h2>";
}
?>

<?php if ($isMiguel): ?>
    <h2>Hay Miguel, migueeeeeel</h2>
<?php elseif ($isMiguel): ?>
    <h2> no miguel</h2>
<?php else: ?>
    <h2> no persom?</h2>
<?php endif; ?>

<h2><?= $isMiguelResult ?></h2>
<h3><?= $outputAge1 ?></h3>
<h3><?= $outputAge2 ?></h3>
<h3><?= $bestLanguages[5] ?></h3>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>