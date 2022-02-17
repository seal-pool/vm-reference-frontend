<?php
if (!defined('G_VM_ENTRY_POINT'))
    die("Not a valid entry point");
?>
                <h3>What is this?</h3>
                <p>Vending machine is a Cardano token distribution system developed and operated by <a target="new" href="https://adaseal.eu/">SEAL pool</a>. It provides a service
                    for delegates of participating pools allowing them to withdraw various native tokens or ADA rewards easily distributed by pool operators or token
                    creators both on regular basis each epoch, or through one time air-drops.
                </p>
                
                <h3>Why?</h3>
                <p>Many pools want to offer various incentives to their delegates in form of giving them additional tokens, either ADA or other native tokens. Especially small
                    pools that struggle to remain competitive due to 340ADA min costs. Min cost is a hard constraint defined by Cardano protocol and can't be set lower at this moment.
                    Some smaller pools may however want to instead give part of this cost back to their delegates to remain competitive to large pools. However such
                    distribution is not trivial due to network fee costs. Sending them in form of transaction to everyone each epoch would be too costly and inefficient.
                    Vending Machine solves this problem.
                </p>
                
                <h3>How does it work?</h3>
                <p>Each participating pool can offer various tokens, including ADA, to its delegates based on various criteria (time, stake size, etc.). Vending machine observes
                    the delegates and pool performance each epoch. Based on this data tokens are accumulated to each delegate account inside of vending machine, based on their
                    staking address. When the amount of tokens is reasonably high, each delegate can withdraw them using this vending machine.</p>
                
                <h3>How much does it cost?</h3>
                <p>That depends on the rewards. If the pool is distributing ADA and the delegate accumulated more than min UTXO size + min TX fee (~1.4ADA) then the withdrawal is
                    completely free. In case there isn't enough ADA accumulated, but there are some tokens available that delegate wants to withdraw, they still have the option
                    to do it, but they need to cover the TX fees by sending UTXO deposit to vending machine. Tokens and most of ADA will be returned back to them.
                </p>
                
                <h3>How can I add my pool or token project?</h3>
                <p>Join the telegram group <a target="new" href="https://t.me/+aEODDGHtGQxkYWU0">here</a></p>
                
                <h3>How does it help decentralization?</h3>
                <p>Cardano decentralization is <a target="new" href="https://iohk.io/en/blog/posts/2020/11/13/the-general-perspective-on-staking-in-cardano/">negatively affected by
                    operators that run more than one pool</a>, despite such behaviour is considered malicious by very designers of staking mechanism. This service is promoting
                    decentralization by providing its service only to operators committed to never run more than a single pool.</p>
                
                <h3>What if I send you wrong amount of ADA?</h3>
                <p>Your ADA won't be lost, in case you send more than requested TX fee deposit, system will automatically send you back all extra ADA as part of your reward.
                    So you will get back exactly same amount you sent minus transaction fees. In case you send less than requested deposit of 2ADA, system will consider it a mistake on your side,
                    and again send you ADA back, but this time only ADA, because TX including native assets is expensive and this wouldn't cover it. If you send less than 1ADA + tx fees,
                    system will not send anything back to you, but it will add this amount to your reward bonus, so you will get it back during next withdrawal.
                </p>
                
                <h3>Do rewards accumulate, or I need to withdraw each epoch?</h3>
                <p>Yes, your rewards do accumulate, but some rewards may have an expiry set, meaning that they will expire if you don't withdraw them until the expiry time.
                    You can see details in rewards breakdown.
                </p>
                
                <h3>What is reserved / overcommit in reward breakdown?</h3>
                <p>Operators who distribute tokens using Vending Machine have two options for token delivery. One is to reserve token for each target they deliver to.
                    That instantly deducts the token amount from their balance and reserves the token for whoever is the target. Usually these rewards have expiry set
                    and if not withdrawn until this expiry is reached, tokens are returned back to operator who sent them. This delivery method provides 100% guarantee for
                    targets that their tokens are going to be possible to withdraw, but require operator to provide large token deposit and unnecessarily blocks lots of tokens in case
                    many targets in target group do not want to withdraw.
                </p>
                <p>
                    Another delivery method is overcommit. With overcommit operators only create a "promise of reward" and tokens are not blocked and are deducted from
                    operator balance only when they are withdrawn. The system only display
                    tokens as available for withdrawal if operator who provides them actually owns them, that means if someone created a false promise to deliver tokens that they
                    can't fullfil, you wouldn't even see it in reward breakdown. Only downside of this method is that in case operator runs out of tokens, the delivery for
                    this particular reward is temporarily not available until they add more tokens into the vending system.
                </p>
