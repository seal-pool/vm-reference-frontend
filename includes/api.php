<?php

if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");

class API
{
    private static function get($params)
    {
        global $g_api, $g_api_token;
        $ch = curl_init();
        // This doesn't seem to work, need to investigate why
        //curl_setopt($ch, CURLOPT_HTTPHEADER, [ "bearer_token: $g_api_token" ]);
        curl_setopt($ch, CURLOPT_URL, "${g_api}" . "?token=$g_api_token&action=$params");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $json = json_decode(curl_exec($ch), true);
        curl_close($ch);

        return $json;
    }

    public static function SanitizeAddr($address)
    {
        return self::get("sanitize_address&address=$address")["staking_address"];
    }

    public static function GetRewards($staking_address)
    {
        return self::get("get_rewards&staking_address=${staking_address}");
    }

    public static function GetPools()
    {
        return self::get("get_pools");
    }

    public static function GetTokens()
    {
        return self::get("get_tokens");
    }
}