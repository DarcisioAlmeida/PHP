<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
// define tb é constante executa antes
define("COURSE", "Full Stack PHP");
const AUTHOR = "Robson";

$formation = true;
if ($formation){
    define("COURSE_TYPE", "Formação");
}else{
    define("COURSE_TYPE", "Curso");
}

echo "<p>COURSE_TYPE COURSE AUTHOR</p>"; // nao interpreta constante
echo "<p>{COURSE_TYPE} {COURSE} {AUTHOR}</p>"; // nao interpreta
echo "<p>", COURSE_TYPE, " ", COURSE, " ", AUTHOR; // interpreta constate
echo "<p>".COURSE_TYPE." ".COURSE." ".AUTHOR."</p>"; // interpreta constante


class Config{
    const USER = "root";
    const HOST = "localhost";
}
echo "<p>", Config::USER, "</p>";
echo "<p>", Config::HOST, "</p>";

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
// constantes definidas pelo PHP sempre usam __
var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);

// descobre qual função estamos usando
function fullStackPHP(){
    return __FUNCTION__;
}

var_dump(fullStackPHP());

trait MyTrait{
    public $traitName = __TRAIT__;
}

class FsPHP{
    use MyTrait;
    public $className = __CLASS__;
}

var_dump(new FsPHP());

require __DIR__."/MyClass.php";
var_dump(new \Source\MyClass());
//var_dump(\Source\MyClass::class);

var_dump(get_defined_constants(true)); // constantes pre definidas no PHP