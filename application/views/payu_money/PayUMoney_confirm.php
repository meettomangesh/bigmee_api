
<form action="<?= $payment_data->payu_base_url ?>" method="post" id="payuConfirmForm" class="form-control-style1">
  <div class="panel panel-success">
    <div class="panel-body">
        <ul class="payu-data-list">
            <li>
                <strong>User Name</strong>
                <span><?= $payment_data->fname ?></span>
            </li>
            <li>
                <strong>Mobile</strong>
                <span><?= $payment_data->mobile ?></span>
            </li>
            <li>
                <strong>Email</strong>
                <span><?= $payment_data->email ?></span>
            </li>
            <li>
                <strong>Amount</strong>
                <span><?= formateBalance($payment_data->amount) ?></span>
            </li>
            <li>
                <strong>Transaction for</strong>
                <span><?= $payment_data->product_info ?></span>
            </li>
        </ul>
      <input type="hidden" name="key" value="<?= $payment_data->merchant_key ?>" />
      <input type="hidden" name="hash" value="<?= $payment_data->hash ?>" />
      <input type="hidden" name="txnid" value="<?= $payment_data->txnid ?>" />
      <input type="hidden" name="amount" value="<?= $payment_data->amount ?>" />
      <input type="hidden" name="firstname" value="<?= $payment_data->fname ?>" />
      <input type="hidden" name="email" value="<?= $payment_data->email ?>" />
      <input type="hidden" name="phone" value="<?= $payment_data->mobile ?>" />
      <input type="hidden" name="productinfo" value="<?= $payment_data->product_info ?>" />
      <input type="hidden" name="surl" value="<?= $payment_data->surl ?>" />
      <input type="hidden" name="furl" value="<?= $payment_data->furl ?>" />
      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
     </div>
     <div class="panel-footer text-center">
        <p class="text-danger">Note: please confirm your credentials and amount to be transaction</p>
        <input type="submit" class="btn btn-success" value="Make payment">
     </div>     
   </div>
</form>