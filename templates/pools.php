<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");
?>
            <h2>Pools</h2>
            <p>Following pools are currently participating in Vending Machine token distribution. Stake with any of these pools in order to receive rewards from them!</p>
            <div class="container-fluid">
                <table border="1" class="table table-condensed table-bordered table-hover">
                    <tr>
                        <th></th>
                        <th>Ticker</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
<?php
$pools = API::GetPools();
foreach ($pools as $pool_id => $pool_info)
{
    if ($pool_info['enabled'] != 't')
        continue;
    
    $Parsedown = new Parsedown();
    echo ("                    <tr>");
    echo ('<td width="64px"><img src="' . $pool_info['logo'] . '" alt="'. $pool_info['ticker'] .'" width=64 height=64></td>');
    echo ("<td>${pool_info['ticker']}</td><td>${pool_info['name']}</td><td>" . $Parsedown->text($pool_info['description']) . "</td></tr>\n");
}
?>
                </table>
            </div>
