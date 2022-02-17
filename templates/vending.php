<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");
?>
            <h2>Reward vending</h2>
            <div class="container-fluid">
                <div class="alert alert-warning alert-dismissable">
                    Due to high network congestion reward delivery may take several minutes. We apologize for the inconvenience.
                </div>
                <p>Enter your $handle, staking or payment address:</p>
                <form action="/check_rewards" method="post">
                    <input type="text" name="staking_address" value="" class="form-control" placeholder="Enter your handle, payment or staking address, for example $seal or stake1ux5m5uxees449gxfz534vvg6yw2c62chdua3nxlf7cu6p3gxn4ts9">
                    <input type="submit" name="lookup" value="Check rewards" class="btn btn-primary">
                </form>
                <div align="center"><a href="/about">What is this?</a></div>
            </div>
