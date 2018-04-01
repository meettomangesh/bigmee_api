
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="panel-body">
                          <div class="col-md-6">
                            <div class="panel panel-danger short-memo">
                                <div class="panel-heading">
                                    <h4>Products</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-product-hunt"></i>
                                   </div>  
                                   <div class="col-md-5">
                                     <h3><?= $itemCount->product ?></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= link_url('supplier/products') ?>" class="btn btn-danger btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                                   </dir>                                          
                                </div>
                            </div>
                          </div>    
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-info short-memo">
                                <div class="panel-heading">
                                    <h4>Enquiry</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-reply"></i>
                                   </div>  
                                   <div class="col-md-5">
                                     <h3><?= $itemCount->prod_enquiry ?></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= base_url('supplier/user-requirements#product') ?>" class="btn btn-info btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                                   </dir>                                          
                                </div>
                            </div>
                          </div>    
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-warning short-memo">
                                <div class="panel-heading">
                                    <h4>Contacts</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-phone"></i>
                                   </div>  
                                   <div class="col-md-5">
                                     <h3><?= $itemCount->contact  ?></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= link_url('supplier/manage-contact') ?>" class="btn btn-warning btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                                   </dir>                                          
                                </div>
                            </div>
                          </div>    
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-success short-memo">
                                <div class="panel-heading">
                                    <h4>Balance</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-balance-scale"></i>
                                   </div>  
                                   <div class="col-md-5">
                                     <h3><?= formateBalance($profile->acct_balance + $profile->acct_wallet) ?> <small>INR</small></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= link_url('supplier/balance-info') ?>" class="btn btn-success btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                                   </dir>                                          
                                </div>
                            </div>
                          </div>    
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-info short-memo">
                                <div class="panel-heading">
                                    <h4>Discount</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-money"></i>
                                   </div>  
                                   <div class="col-md-5">
                                     <h3><?= formateBalance(showData($itemCount->refer_income, 0)) ?> <small> INR</small></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= link_url('supplier/refer-income') ?>" class="btn btn-info btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                                   </dir>                                          
                                </div>
                            </div>
                          </div>    
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-warning short-memo">
                                <div class="panel-heading">
                                    <h4>Message</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-envelope"></i>
                                   </div>  
                                   <div class="col-md-5">
                                     <h3><?= showData($itemCount->user_message, 0) ?><small></small></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= base_url('supplier/message#inbox') ?>" class="btn btn-warning btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                                   </dir>                                          
                                </div>
                            </div>
                          </div>    
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-success short-memo">
                                <div class="panel-heading">
                                    <h4>Reminder</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-calendar"></i>
                                   </div>  
                                   <div class="col-md-5">
                                    <h3><?= $itemCount->reminder_count ?></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= base_url('supplier/message#reminder') ?>" class="btn btn-success btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                            </div>
                          </div>    
                       </div>
                       </div>
                       <div class="col-md-6">
                            <div class="panel panel-danger short-memo">
                                <div class="panel-heading">
                                    <h4>Orders</h4>
                                </div>
                                <div class="panel-body text-center">
                                  <div class="col-md-4 short-icon">
                                     <i class="fa fa-shopping-cart"></i>
                                   </div>  
                                   <div class="col-md-5">
                                        <h3><?= $itemCount->order_count ?></h3>
                                    </div>
                                   <div class="col-md-3">
                                     <a href="<?= base_url('supplier/user-requirements#order') ?>" class="btn btn-danger btn-sm">Show
                                        <i class="fa fa-arrow-right"></i>
                                     </a>
                            </div>
                          </div>    
                       </div>
                   </div>
            </div>
        </div>
    </div>
</section>        