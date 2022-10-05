<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
/* 
  include - serve para importar recurso de outra arquivo ou trecho de codigo
  include_once - evitar que duplique o codigo caso tenha sido declarado
*/
//include "file.php";
//echo "<p>Continue</p>";

//include "header.php";  
include __DIR__."/header.php";  // indicado usar _DIR_

$profile = new StdClass();
$profile->name = "Darcisio Almeida";
$profile->company = "Upinside";
$profile->email = "darcisioalmeida@gmail.com";
include __DIR__."/profile.php";

$profile = new StdClass();
$profile->name = "Lorena";
$profile->company = "Upinside";
$profile->email = "lorenaalmeida@gmail.com";
include __DIR__."/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
/*
  require serve para importar configuração ou dependencia ou função para aplicação
  require_once - evitar que duplique o codigo caso tenha sido declarado
*/
//require "file.php";
//echo "<p>Continue</p>";

require __DIR__."/config.php";
require_once __DIR__."/config.php";

echo "<h1>".COURSE."</h1>";

var_dump(require_once __DIR__."/config.php");

