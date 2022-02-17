<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");
?>
            <h2>Reward vending</h2>
            <div class="container-fluid">
<?php
if ($staking_address !== NULL)
{
    if ($g_rewards['total_rewards'] == 0)
    {
        echo ('            <div class="alert alert-danger alert-dismissable">');
        echo ("            <p>There are no rewards available for staking address $staking_address. Please check later.</p>");
        echo ('            </div>');
    } else
    {
        echo ('            <div class="alert alert-info alert-dismissable">');
        echo ("            <p>Following tokens are available for withdrawal for $staking_address:</p>");
        echo ('            </div>');
        echo ('            <table border="1" class="table table-condensed table-bordered table-hover">');
        echo ('            <tr><th></th><th>Token</th><th>Amount</th></tr>');

        $tokens = API::GetTokens();

        foreach ($g_rewards['consolidated_rewards'] as $token_id => $balance)
        {
            $logo = $tokens[$token_id]['logo'];
            $ticker = $tokens[$token_id]['ticker'];
            echo ("<tr><td width='64px'><img src=\"$logo\" alt=\"$ticker\" width=64 height=64></td><td>$ticker</td><td>$balance</td></tr>");
        }
        echo ('            </table>');

        $deposit = $g_rewards['min_balance'] / 1000000;
        $vending = $g_rewards['vending_address'];
        echo ("            <p>You can withdraw these rewards by sending <b>$deposit ADA</b> to <code>$vending</code></p>");
    }
} else
{
    echo ('            <div class="alert alert-danger alert-dismissable">');
    echo ('            <p>No such address was found</p>');
    echo ('            </div>');
}
?>
            </div>