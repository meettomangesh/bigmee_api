
    <div class="box box-content">
        <form id="transferBalanceForm" class="form-style1" name="transferBalanceForm">
            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Account</label><select name="user" id="user">
                        <option value="">--Select-- </option>
                        <option value="CM">Company Users </option>
                        <option value="SP">Supplier Users </option>
                    </select>
                </div>

                <div class="span6">
                    <label class="control-label">Users</label>
                    <select name="user_name[]" id="company_user">
                        <option value="">--Select--</option>
                        <?php foreach($cmAccount as $acct): ?>
                        <option value="<?= $acct['acct_id'] ?>"><?= $acct['user_name']?> (<?= $acct['acct_mobile'] ?>)</option>
                        <?php endforeach; ?>
                    </select>
                    <select name="user_name[]" id="supplier_user">
                        <option value="">--Select--</option>
                        <?php foreach($spAccount as $acct): ?>
                        <option value="<?= $acct['uacct_id'] ?>"><?= $acct['user_name'] ?> (<?= $acct['primary_contact']?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Amount</label>
                    <input type="text" name="amount" id="amount">
                </div>
            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Balance Type</label>
                    <select name="balance_type" id="balance_type">
                        <option value="">--Select--</option>
                        <option value="0">Active</option>    
                        <option value="1">Wallet</option>    
                        <option value="2">Lock</option>
                    </select>
                </div>
            </div>

                <div class="span6">
                    <label class="control-label">Txn Type</label>
                    <select name="txn_type" id="txn_type">
                        <option value="">--Select--</option>
                        <option value="C">Credit</option>
                      <?php if(in_array($this->session->userdata('type'), $debit_role)): ?>    
                        <option value="D">Debit</option>
                      <?php endif; ?>
                    </select>
                </div>
            </div>

            <div class="row-fluid text-right">
                <button type="submit" class="btn btn-primary">Done</button><button type="reset" class="btn">Reset</button>
            </div>
        </form>
    </div>

