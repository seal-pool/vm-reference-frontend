<?php

define('G_VM_ENTRY_POINT', 'index.php');

require_once("definitions.php");
require("config.default.php");
require("config.php");
require_once("includes/api.php");
require_once("includes/token_math.php");
require_once("includes/common.php");
require_once("3rd/Parsedown.php");

$g_action = null;

if ($g_api_token === NULL)
    die('$g_api_token is NULL, please update your config.php and include valid token');

if (isset($_GET['action']))
    $g_action = $_GET['action'];

$active_menu = G_VM_MENU_VENDING;
$page = 'vending.php';
$staking_address = NULL;
$g_rewards = NULL;

switch ($g_action)
{
    case 'about':
        $active_menu = G_VM_MENU_ABOUT;
        $page = "templates/about.php";
        break;
    case 'check_rewards':
        $staking_address = API::SanitizeAddr(get_param_or_fail("staking_address"));
        $g_rewards = API::GetRewards($staking_address);
        $page = "templates/withdrawal.php";
        break;
    case 'pools':
        $active_menu = G_VM_MENU_POOLS;
        $page = "templates/pools.php";
        break;
    case 'tokens':
        $active_menu = G_VM_MENU_TOKENS;
        $page = "templates/tokens.php";
        break;
    case 'distributions':
        $active_menu = G_VM_MENU_DISTRIBUTIONS;
        $page = "templates/distributions.php";
        break;
    case 'custom_withdrawal':

        break;
    default:
        $page = "templates/vending.php";
        break;
}

include("templates/body.php");