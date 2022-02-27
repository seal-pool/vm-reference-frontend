<?php

if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");

class TokenMath
{
    static public function FormattedDecimals(int $amount, int $decimals)
    {
        if ($decimals > 0)
            return number_format(($amount / (10 ** $decimals)), $decimals, '.', ' ');
        
        return number_format((float)$amount, $decimals, '.', ' ');
    }

    // Convert absolute amount to correct one following decimals policy
    static public function Decimals(int $amount, int $decimals) : float
    {
        if ($decimals > 0)
            return (float)$amount / (10 ** $decimals);
        
        return (float)$amount;
    }

    static public function DecimalsNoScience(int $amount, int $decimals) : string
    {
        if ($decimals > 0)
            return sprintf('%f', (float)$amount / (10 ** $decimals));
        
        return sprintf('%f', (float)$amount);
    }

    // Convert cirrect amount to absolute one following decimals policy
    static public function Absolute($amount, int $decimals) : int
    {
        if ($decimals > 0)
            return (int)($amount * (10 ** $decimals));
        
        return (int)$amount;
    }
}