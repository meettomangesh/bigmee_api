
    <form class="form-style2" id="withdrawalRequestForm">
    <?php if($bank_data): ?>
    <div class="panel">
       <div class="text-right"> 
        <button type="button" class="btn btn-danger btn-sm" onclick="return getSupplierBank(<?= $this->session->userdata('uacct_id') ?>)"><i class="fa fa-address-card"></i> Bank</button>
       </div> 
    </div>
    <?php endif; ?>
        <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="amount" id="amount" placeholder="Amount">
            </div>
            <div class="col-md-6 form-group">
                <select class="form-control1" name="bank" id="bank">
                    <option value="">--Select Bank--</option>
                    <?php foreach($bank_data as $bank): ?>
                        <option value="<?= $bank['bank_id'] ?>"><?= $bank['acct_name'].' ('.$bank['acct_no'].')' ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>    
          
          <div class="row">
            <div class="form-group col-md-12">
                <textarea class="form-control1" name="msg" id="msg" placeholder="Type your note..."></textarea>
            </div>
          </div>

        <div class="buttons col-md-12 text-center">
            <button class="btn btn-success" type="submit">Send</button>
        </div>
    </form>
    