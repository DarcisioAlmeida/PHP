<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year){
  $age = date("Y") - $year;
  return "<h5>Voce tem {$age} anos !</h5>";
};

echo $myAge (1998);
echo $myAge (2001);
echo $myAge (1976);
echo $myAge (2021);

$priceBrl = function ($price){
  return "R$ ".number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa {$priceBrl(5070)}</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cartAdd("React", 1, 497);
$cartAdd("Angular", 3, 750);
var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 100;

// sem generator
/*function showDates($days){

    $saveDate = [];
    for ($day =1; $day <$days; $day++){
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style= 'text-align: justify'>";
foreach (showDates(10) as $date){
    echo "<small class = 'tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
*/

// com generator
function generatorDate($days)
{
    for ($day =1; $day <$days; $day++){
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}
echo "<div style= 'text-align: justify'>";
foreach (generatorDate($iterator) as $date){
    echo "<small class = 'tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
