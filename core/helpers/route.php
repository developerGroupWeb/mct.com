<?php
function route($action, $data){

    $uri = $_SERVER['REQUEST_URI'];

    $detach = explode('/',$uri);

    $path = str_replace(array_slice($detach, -2), $action, $uri);
    return implode([$path, $data], '');
}