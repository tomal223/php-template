<?php

function uris($value)
{

    return $_SERVER['REQUEST_URI'] == "$value";
}


function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}



function heading($value)
{
    return $value;
}
