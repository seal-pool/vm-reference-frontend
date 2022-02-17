<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");

// This makes it possible to toggle which menu is marked as active just by changing number of $active_menu
$css_menu_active = [
    0 => '',
    1 => '',
    2 => '',
    3 => '',
    4 => ''
];
$css_menu_active[$active_menu] = ' active';
?>
        <h1><?php echo (G_VM_BRANDING_NAME) ?></h1>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Menu</a>
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item"><a class="nav-link<?php echo($css_menu_active[G_VM_MENU_VENDING]) ?>" href="/vending">Vending</a></li>
                <li class="nav-item"><a class="nav-link<?php echo($css_menu_active[G_VM_MENU_POOLS]) ?>" href="/pools">Pools</a></li>
                <li class="nav-item"><a class="nav-link<?php echo($css_menu_active[G_VM_MENU_TOKENS]) ?>" href="/tokens">Tokens</a></li>
                <li class="nav-item"><a class="nav-link<?php echo($css_menu_active[G_VM_MENU_DISTRIBUTIONS]) ?>" href="/distributions">Distributions</a></li>
                <li class="nav-item"><a class="nav-link<?php echo($css_menu_active[G_VM_MENU_ABOUT]) ?>" href="/about">About</a></li>
            </ul>
        </nav>