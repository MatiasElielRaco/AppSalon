<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Revisa que el usuario este autenticado
function isAuth() : void {
    if (!isset($_SESSION["login"])) {
        header("location: /");
    }
}

function esUltimo(string $acutual, string $proximo) :bool {
    if($acutual !== $proximo) {
        return true;
    } else {
        return false;
    }
}

function isAdmin() : void {
    if(!isset($_SESSION["admin"])) {
        header("location: /");
    }
}