<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");
?>
            <h2>Reward vending</h2>
            <div class="container-fluid">
                <?php
                if ($staking_address !== NULL)
                {?>
                <div class="alert alert-info alert-dismissable">
                    Following tokens are available for withdrawal for <?php echo ($staking_address) ?>:
                </div>
                <?php
                } else
                {?>
                <div class="alert alert-danger alert-dismissable">
                    No such address was found
                </div>
                <?php
                }
                ?>

            </div>