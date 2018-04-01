<?php if($this->uri->segment(1) == 'supplier'): ?>
<div class="container">
          <div class="row">
                <?php foreach($bank_data as $bank): ?>
                  <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4><?= $bank['acct_name'] ?> <a onclick="return sendSupplierBankDetails('<?= $bank['bank_id'] ?>')" href="javascript: void(0)"><i class="fa fa-envelope panel-header-tool"></i></a></h4>
                        </div>
                        <div class="panel-body">
                            <ul class="data-list">
                              <li>
                                <strong>Account type </strong>
                                <span><?= supplierAccountType($bank['acct_type']) ?></span>
                              </li>
                              <li>
                                <strong>Account number </strong>
                                <span><?= $bank['acct_no'] ?></span>
                              </li>
                              <li>
                                <strong>IFC Code </strong>
                                <span><?= $bank['bank_ifc'] ?></span>
                              </li>
                              <li>
                                <strong>Account Holder </strong>
                                <span><?= $bank['acct_holder'] ?></span>
                              </li>
                            </ul>
                        </div>
                    </div>
                  </div>  
                <?php endforeach; ?>     
          </div>
    </div>                
<?php else: ?> 

<div class="row-fluid">
  <?php foreach($bank_data as $bank): ?>
    <div class="box black span4" ontablet="span12" ondesktop="span4">
                        <div class="box-header">
                            <h2><i class="halflings-icon white list"></i><span class="break"></span><?= $bank['acct_name'] ?></h2>
                        </div>
                      <div class="box-content">
                            <ul class="data-list">
                              <li>
                                <strong>Account type </strong>
                                <span><?= supplierAccountType($bank['acct_type']) ?></span>
                              </li>
                              <li>
                                <strong>Account number </strong>
                                <span><?= $bank['acct_no'] ?></span>
                              </li>
                              <li>
                                <strong>IFC Code </strong>
                                <span><?= $bank['bank_ifc'] ?></span>
                              </li>
                              <li>
                                <strong>Account Holder </strong>
                                <span><?= $bank['acct_holder'] ?></span>
                              </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>     
          </div>

<?php endif; ?>