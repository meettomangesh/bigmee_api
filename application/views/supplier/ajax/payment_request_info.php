 
             <div class="row">             
                <div class="panel panel-success">
                    <div class="panel-body">
                        <ul class="payment-data-list">
                            <li>
                                <strong>Date</strong>
                                <span><?= formateDate($payment_data->payment_addon) ?></span>
                            </li>
                            <li>
                                <strong>Payment Id</strong>
                                <span><?= $payment_data->payment_id ?></span>
                            </li>
                            <li>
                                <strong>Amount</strong>
                                <span><?= formateBalance($payment_data->payment_amt) ?></span>
                            </li>
                            <li>
                                <strong>Balance</strong>
                                <span><?= formateBalance($payment_data->payment_balance) ?></span>
                            </li>
                            <li>
                                <strong>Type</strong>
                                <span>
                                    <?php if($payment_data->payment_type == "C"):
                                             $type = "Request"; 
                                             $class = "primary";
                                          elseif($payment_data->payment_type == "O"):
                                             $type = "Online";
                                             $class = "warning";
                                          else:
                                             $type = "Withdrawal";
                                             $class = "success";   
                                          endif; ?>
                                    <label class="label label-<?= $class ?>"><?= $type ?></label>
                                </span>
                            </li>
                            <li>
                                <strong>Txn Id</strong>
                                <span><?= showData($payment_data->txn_id, '-') ?></span>
                            </li>
                            <li>
                                <strong>Reference Id</strong>
                                <span><?= $payment_data->payment_reference ?></span>
                            </li>
                            
                            <?php if($payment_data->payment_type == "C"): ?>
                            <li>
                                <strong>Bank</strong>
                                <span><?= $payment_data->bank_name ?></span>
                            </li>
                            <li>
                                <strong>Method</strong>
                                <span><?= $payment_data->payment_method ?></span>
                            </li>
                            <li>
                                <strong>Note</strong>
                                <span><?= $payment_data->payment_msg ?></span>
                            </li>
                            
                            <?php endif; ?>
                            <li>
                                <strong>Status</strong>
                                <?php $status = paymentStatus($payment_data->payment_status); ?>
                                <span><label class="label label-<?= $status['class'] ?>"><?= $status['status'] ?></label></span>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer text-center">
                      <?php if($payment_data->payment_status != 'T'): ?>  
                      <button class="btn btn-info btn-sm" onclick="return editPaymentRequest('<?=$payment_data->payment_id ?>')">Edit <i class="fa fa-arrow-up"></i></button>
                      <button class="btn btn-danger btn-sm" onclick="return cancelPaymentRequest('<?=$payment_data->payment_id ?>')">Cancel <i class="fa fa-close"></i>
                      <?php endif; ?>
                    </div>
                    </div>
                </div>