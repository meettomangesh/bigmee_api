
<?php if(isset($payment_data)): ?>

<form class="form-style2" id="editBalanceRequestForm">
        <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="amount" id="amount" value="<?= $payment_data->payment_amt ?>" placeholder="Amount">
            </div>
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="balance" value="<?= $payment_data->payment_balance ?>" placeholder="Balance amount">
            </div>
        </div>  
        
        <div class="row">
            <div class="col-md-6 form-group">
                <select class="form-control1" name="bank" id="bank">
                    <option value="">--Select Bank--</option>
                    <?php foreach($bank_data as $bank): ?>
                        <option <?php if($bank['pay_point'] == $payment_data->bank_name){ echo "selected"; } ?>><?= $bank['pay_point'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 form-group"> 
                <select class="form-control1" name="method" id="method">
                    <option value="">--Deposite Method--</option>
                    <?php foreach($payment_method as $method): ?>
                        <option <?php if($method['method_name'] == $payment_data->payment_method){ echo "selected";} ?>><?= $method['method_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>   
          
          <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="reference" value="<?= $payment_data->payment_reference ?>" placeholder="Reference number">
            </div>
            <div class="form-group col-md-6">
                <textarea class="form-control1" name="msg" placeholder="Type your note..."><?= $payment_data->payment_msg ?></textarea>
            </div>
          </div>

        <div class="buttons col-md-12 text-center">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
    
<?php else: ?>

<form class="form-style2" id="sendBalanceRequestForm">
    <div class="panel">
       <div class="text-right"> 
        <a href="javascript: void(0)" id="viewBankInfo" class="btn btn-info btn-sm">Bank details</a>
       </div> 
    </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="amount" id="amount" placeholder="Amount">
            </div>
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="balance" id="balance" placeholder="Balance amount">
            </div>
        </div>  
        
        <div class="row">
            <div class="col-md-6 form-group">
                <select class="form-control1" name="bank" id="bank">
                    <option value="">--Select Bank--</option>
                    <?php foreach($bank_data as $bank): ?>
                        <option><?= $bank['pay_point'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 form-group"> 
                <select class="form-control1" name="method" id="method">
                    <option value="">--Deposite Method--</option>
                    <?php foreach($payment_method as $method): ?>
                        <option><?= $method['method_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>   
          
          <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="reference" id="reference" placeholder="Reference number">
            </div>
            <div class="form-group col-md-6">
                <textarea class="form-control1" name="msg" id="msg" placeholder="Type your note..."></textarea>
            </div>
          </div>

        <div class="buttons col-md-12 text-center">
            <button class="btn btn-success" type="submit">Send</button>
        </div>
    </form>

<?php endif; ?>    