            <div class="col-md-9 right-content-panel">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>Transaction Successfull</h4>
                    </div>
                    <div class="panel-body"> 
                          <ul class="payu-data-list col-md-6">
                            <li>
                                <strong>Transction Id</strong>
                                <span><?= $success->txnid ?></span>
                            </li>
                            <li>
                                <strong>Status</strong>
                                <span><?= $success->status ?></span>
                            </li>
                            <li>
                                <strong>Amount</strong>
                                <span><?= $success->amount ?></span>
                            </li>
                            <li>
                                <strong>Transaction for</strong>
                                <span><?= $success->productinfo ?></span>
                            </li>
                            <li>
                                <strong>User Name</strong>
                                <span><?= $success->firstname ?></span>
                            </li>
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $success->phone ?></span>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <span><?= $success->email ?></span>
                            </li>
                          </ul>
                    </div>
                    <div class="panel-footer text-center">
                        <p class="text-success">Thank for using our online service for purchasing bigmee balance, your account has been successfully credited by <?= $success->amount ?> balance</p>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section> 