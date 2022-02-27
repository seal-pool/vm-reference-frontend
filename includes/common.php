<?php

if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");

function get_param_or_fail($param_name)
{
    if (isset($_GET[$param_name]))
        return $_GET[$param_name];
    
    if (!isset($_POST[$param_name]))
        die("Missing parameter: $param_name");

    return $_POST[$param_name];
}
