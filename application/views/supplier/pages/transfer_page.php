<div class="col-lg-10 col-md-9 right-content-panel">
     <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Transfer List</h4>
        </div>
        <div class="panel-body"> 
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <ul class="balance-info">
                            <li><strong>Active</strong>: <span><?= formateBalance($profile->acct_balance) ?> INR</span></li>
                            <li><strong>Validity</strong>: <span><?= formateDate($profile->uacct_validity, 2) ?></span></li>
                          </ul>
                         </div>
                         <div class="col-md-3 col-sm-6">
                          <ul class="balance-info">
                            <li><strong>Wallet</strong>: <span><?= formateBalance($profile->acct_wallet) ?> INR</span></li>
                            <li><strong>Validity</strong>: <span><?= formateDate($profile->uacct_validity, 2) ?></span></li>
                          </ul>
                         </div> 
                         <div class="col-md-3 col-sm-6">
                          <ul class="balance-info">
                              <li><strong>Lock</strong>: <span><?= formateBalance($profile->acct_lock) ?> INR</span></li>
                              <li><strong>Validity</strong>: <span><?= formateDate($profile->uacct_validity, 2) ?></span></li>
                          </ul>
                         </div>
                     </div>
            <div class="row top-toolbar">
                   <div class="form-group col-md-2">  
                       <input type="text" class="filter-input-transfer form-control" data-column="0" placeholder="Transfer id" autocomplete="off">
                   </div> 
                   <div class="form-group col-md-2">  
                       <input type="text" class="filter-input-transfer form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                   </div> 
                   <div class="form-group col-md-2">  
                       <input type="text" class="filter-input-transfer form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                   </div>
                   <div class="form-group col-md-2">  
                      <select class="filter-input-transfer form-control" data-column="3" >  
                        <option value="">Txn Type</option>
                        <option value="credit">Credit</option>
                        <option value="debit">Debit</option>
                      </select>
                   </div>
                   <div class="form-group col-sm-4 text-right"> 
                       <button type="button" class="btn btn-success btn-sm" onclick="return transferSupplierBalance()"><i class="fa fa-reply"></i> Transfer</button>
                   </div>
             </div>
             <table class="table table-striped table-bordered dataTable" id="transferDataTable">
                <thead>
                  <tr>
                    <th>Tansfer Id</th>
                    <th>Date</th>
                    <th>To</th>
                    <th>Amount</th>
                    <th>Txn Type</th>
                    <th>Balance</th>
                    <th>Bal Type</th>
                    <th>Txn Id</th>
                    <th>Actions</th>
                  </tr>
                </thead>   
             </table>
          </div>
        </div>
      </div>
    </div>    
</section>   
