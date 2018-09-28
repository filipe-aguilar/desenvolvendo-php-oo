<?php

function carregandoClasses($nomeClasse){
    require_once "./class/".$nomeClasse.".php";
}

spl_autoload_register("carregandoClasses");