
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Deposite Request</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-sp-helpbar">
                     <div class="col-md-4 payment-info">
                        <ul>
                            <li><strong>Last Payment</strong>: <span><?php if(isset($last_payment->payment_amt)): echo formateBalance($last_payment->payment_amt); endif; ?></span></li>
                            <li><strong>Last payment date:</strong> <span><?php if(isset($last_payment->payment_addon)): echo formateDate($last_payment->payment_addon, 1); endif; ?></span></li>
                        </ul>
                     </div>
                        <div class="col-md-8">
                          <div class="floatright">
                            <button type="button" class="btn btn-primary btn-sm" id="withdrawalRequestBtn"><i class="fa fa-money"></i> withdrawal</button>
                            <button type="button" class="btn btn-danger btn-sm" id="sendBalanceRequest"><i class="fa fa-paper-plane"></i> Deposite</button>
                            <button type="button" class="btn btn-warning btn-sm" id="onlinePayment"><i class="fa fa-university"></i> Online</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>  
                    </div>
                    <div class="row">
                      <ul class="supplier-tab product-tab nav nav-tabs" role="tablist">
                          <li class="nav-item active">
                            <a class="nav-link " data-toggle="tab" href="#request" role="tab">Deposite</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#online" role="tab">Online</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#withdrawal" role="tab">Withdrawal</a>
                          </li>
                      </ul>    
                    </div>
                <div class="tab-content">
					<div class="tab-pane  fade in active" id="request">                   
                     <div class="row top-toolbar">
                         <div class="col-md-12">
                              <div class="form-group col-md-2">  
                                <input type="tel" name="reqId" id="reqId" class="form-control" placeholder="Deposite id" data-column="0" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="reqfromDate" id="reqfromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="reqtoDate" id="reqtoDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-4">  
                               <select class="form-control" name="bank" id="bank" data-column="3">
                               <option value="">Bank Name</option>
                               <?php foreach($bank_data as $bank): ?>
                                   <option><?= $bank['pay_point'].' ( '.$bank['acct_no'].' )' ?></option>
                               <?php endforeach; ?>    
                               </select>
                              </div>
                              <div class="form-group col-md-2">  
                               <select class="form-control" name="reqStatus" id="reqStatus" data-column="4">
                                   <option value="">Status</option>
                                   <option value="T">Accept</option>
                                   <option value="R">Reject</option>
                                   <option value="F">Pending</option>
                               </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="paymentRequestDataTable">
						  <thead>
							  <tr>
                                  <th>Deposite Id</th>
								  <th>Date</th>
                                  <th>Txn Id</th>
								  <th>Amount</th>
								  <th>Balance</th>
								  <th>Status</th>
								  <th>Bank</th>
								  <th>Method</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
          </table>
       </div>
                     
					<div class="tab-pane  fade in" id="online">            
                     <div class="row top-toolbar">
                         <div class="col-md-12">
                              <div class="form-group col-md-2">  
                                <input type="tel" name="paymentId" id="paymentId" class="form-control" placeholder="Payment id" data-column="0" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="fromDate" id="fromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="toDate" id="toDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="paymentOnlineDataTable">
						  <thead>
							  <tr> 
								  <th>Date</th>
                                  <th>Payment Id</th> 
                                  <th>Txn Id</th>
								  <th>Amount</th>
								  <th>Txn Status</th>
                                  <th>Reference</th>
								  <th>Actions</th>
							  </tr>
						  </thead>      
          </table>
        </div>


          <div class="tab-pane  fade in" id="withdrawal">                   
                     <div class="row top-toolbar">
                         <div class="col-md-12">
                              <div class="form-group col-md-2">  
                                <input type="tel" class="form-control filter-input-withdrawal" placeholder="Withdrawal id" data-column="0" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-withdrawal" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-withdrawal" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-4">  
                               <select class="form-control filter-input-withdrawal" data-column="3">
                               <option value="">Bank Name</option>
                               <?php foreach($my_bank as $bank): ?>
                                   <option value="<?= $bank['bank_id'] ?>"><?= $bank['bank_name'].' ( '.$bank['acct_no'].' )' ?></option>
                               <?php endforeach; ?>    
                               </select>
                              </div>
                              <div class="form-group col-md-2">  
                               <select class="form-control filter-input-withdrawal" data-column="4">
                                   <option value="">Status</option>
                                   <option value="T">Accept</option>
                                   <option value="R">Reject</option>
                                   <option value="F">Pending</option>
                               </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="withdrawalRequestDataTable">
              <thead>
                <tr>
                                  <th>Withdrawal Id</th>
                  <th>Date</th>
                                  <th>Txn Id</th>
                  <th>Amount</th>
                  <th>Balance</th>
                  <th>Status</th>
                  <th>Bank</th>
                  <th>Actions</th>
                </tr>
              </thead>   
          </table>
       </div>
                      
                    </div>
                    <div class="panel-footer text-center">   
                    </div> 
                </div>
            </div>
            
        </div>
    </div>
</section>     