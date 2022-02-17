<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");
?>
            <h2>Tokens</h2>
            <p>Following tokens are being distributed by participating pools (please note that each pool may distribute different tokens, if you want to see which tokens are being periodically distributed by whom, see distributions):</p>
            <div class="container-fluid">
                <table border="1" class="table table-condensed table-bordered table-hover">
                    <tr>
                        <th></th>
                        <th>Ticker</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
<?php
$tokens = API::GetTokens();
foreach ($tokens as $token_id => $token_info)
{
    if ($token_info['enabled'] != 't')
        continue;
    
    $Parsedown = new Parsedown();
    echo ("                    <tr>");
    echo ('<td width="64px"><img src="' . $token_info['logo'] . '" alt="'. $token_info['ticker'] .'" width=64 height=64></td>');
    echo ("<td>${token_info['ticker']}</td><td>${token_info['name']}</td><td>" . $Parsedown->text($token_info['description']) . "</td></tr>\n");
}
?>
                </table>
            </div>