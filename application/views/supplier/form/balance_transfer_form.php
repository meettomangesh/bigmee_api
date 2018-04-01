<div class="container">
        <form class="form-style2" id="balanceTransferForm">
          <div class="panel panel-info">
             <div class="panel-heading">
               <h5>Supplier Information</h5>
             </div>
             <div class="panel-body">
              <ul class="data-list">
                <li>
                  <strong>Supplier Id</strong>
                  <span><?= $acct_data->uacct_suid ?></span>
                </li>
                <li>
                  <strong>Company</strong>
                  <span><?= $acct_data->c_name ?></span>
                </li>
                <li>
                  <strong>Contact</strong>
                  <span><?= $acct_data->primary_contact ?></span>
                </li>
                <li>
                  <strong>Name</strong>
                  <span><?= $acct_data->user_name ?></span>
                </li>
                <li>
                  <strong>Active Balance</strong>
                  <span><?= formateBalance($acct_data->acct_balance) ?></span>
                </li>
                <li>
                  <strong>Wallet Balance</strong>
                  <span><?= formateBalance($acct_data->acct_wallet) ?></span>
                </li>
              </ul>
             </div>
           </div>
           
           <div class="panel panel-success">
             <div class="panel-body">
               <div class="row">
                 <input type="hidden" name="acct_id" id="acct_id" value="<?= $acct_data->uacct_id ?>">
                   <div class="form-group col-md-6">
                     <input type="text" class="form-control1" name="balance" placeholder="Enter balance for transaction" autocomplete="off">
                   </div>
                   <?php if($acct_data->uacct_id != $this->session->userdata('uacct_id')): ?>
                   <div class="form-group col-md-6">
                     <select class="form-control1" name="txn_type" id="txn_type">
                       <option value="">---Txn Type---</option>
                          <option value="credit">Credit</option>
                          <option value="debit">Debit</option>
                     </select>
                   </div>
                     <input type="hidden" class="form-control1" name="acct_type" value="0">
                 <?php else: ?>
                     <input type="hidden" name="acct_type" value="1">
                 <?php endif; ?>
                   <div class="form-group col-md-6">
                     <textarea class="form-control1" name="remark" placeholder="Enter remark"></textarea>
                   </div>
                 </div>
                 <div class="row">
                   <button type="submit" class="btn btn-sm btn-success pull-right">Done</button>
                   <button type="button" class="btn btn-sm btn-danger pull-left" id="backBtn">Back</button>
                 </div>  
             </div>
           </div>  
        </form>
    </div>