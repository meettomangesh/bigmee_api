            <div class="col-md-9 right-content-panel">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>Transaction Failed</h4>
                    </div>
                    <div class="panel-body"> 
                          <ul class="payu-data-list col-md-6">
                            <li>
                                <strong>Transction Id</strong>
                                <span><?= $failure->txnid ?></span>
                            </li>
                            <li>
                                <strong>Status</strong>
                                <span><?= $failure->status ?></span>
                            </li>
                            <li>
                                <strong>Amount</strong>
                                <span><?= $failure->amount ?></span>
                            </li>
                            <li>
                                <strong>Transaction for</strong>
                                <span><?= $failure->productinfo ?></span>
                            </li>
                          </ul>
                    </div>
                    <div class="panel-footer text-center">
                        <a type="button" class="btn btn-success btn-sm" id="onlinePayment"><i class="fa fa-refresh"></i> Retry</a>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section> 