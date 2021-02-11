<?php

if (!function_exists('to_object')) {
    function to_object($array)
    {
        return json_decode(json_encode($array), false);
    }
}
if (!function_exists('to_array')) {
    function to_array($object)
    {
        return json_decode(json_encode($object), true);
    }
}
