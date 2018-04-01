 
<div class="row">             
    <div class="panel panel-success">
        <div class="panel-body">
            <ul class="payment-data-list">
                <li>
                    <strong>Date</strong>
                    <span><?= formateDate($transfer_log->txn_addon) ?></span>
                </li>
                <li>
                    <strong>Transfer Id</strong>
                    <span><?= $transfer_log->transfer_id ?></span>
                </li>
                <li>
                    <strong>Transfered to</strong>
                    <span>SU<?= $transfer_log->transfer_uacct_id ?></span>
                </li>
                <li>
                    <strong>Amount</strong>
                    <span><?= formateBalance($transfer_log->txn_amount) ?></span>
                </li>
                <li>
                    <strong>Balance type</strong>
                    <?php if($transfer_log->balance_type == 0){$b_type = "Active"; }else if($row['balance_type'] == 1){$b_type = "Wallet";}else if($row['balance_type'] == 2){$b_type = "Lock";} ?>
                    <span><?= $b_type ?></span>
                </li>
                <li>
                    <strong>Balance</strong>
                    <span><?= formateBalance($transfer_log->uacct_balance) ?></span>
                </li>
                <li>
                    <strong>Type</strong>
                    <span>
                        <?php
                            if($transfer_log->txn_type == 'credit'){
                                $class = 'success';
                                $type = "Credit";
                            }else{
                                $class = 'danger';
                                $type = "Debit";

                            }
                        ?>
                        <label class="label label-<?= $class ?>"><?= $type ?></label>
                    </span>
                </li>
                <li>
                    <strong>Txn id</strong>
                    <span><?= $transfer_log->txn_id ?></label></span>
                </li>
                <li>
                    <strong>Remark</strong>
                    <span><?= $transfer_log->transfer_remark ?></label></span>
                </li>
            </ul>
        </div>
    </div>
</div>