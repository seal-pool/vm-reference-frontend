<?php

if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");

define('G_VM_VERSION', '1.0.0');
define('G_VM_BRANDING_NAME', 'Vending Machine');
define('G_VM_DESCRIPTION', 'Cardano token distribution platform');
define('G_VM_BRANDING_TAGS', 'cardano, native asset, cryptocurrency, tokens, NFT, NFTs, staking pool, staking pools, staking');

define('G_VM_REQUEST_NEW', 0);
define('G_VM_REQUEST_PROCESSING', 1);
define('G_VM_REQUEST_FAILED', 2);
define('G_VM_REQUEST_PROCESSED', 3);

define('G_VM_MODEL_FIXED', 0);
define('G_VM_MODEL_MULTIPLY', 1);

define('G_VM_MENU_VENDING', 0);
define('G_VM_MENU_POOLS', 1);
define('G_VM_MENU_TOKENS', 2);
define('G_VM_MENU_DISTRIBUTIONS', 3);
define('G_VM_MENU_ABOUT', 4);
