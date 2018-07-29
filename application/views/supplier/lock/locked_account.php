<div class="locked-account">
<div class="col-md-4">
</div> 
<div class="col-md-4  account-expired">
<div class="panel panel-danger">
    <div class="panel panel-heading">
        <h3>Account expired</h3>
    </div>
    <div class="panel panel-body">
    <p class="text-warning">Dear user your account validity was expired on <strong><?= formateDate($profile->uacct_validity) ?></strong>, please update balance to your account or activate 
    a suitable plan for using our services </p>
    <h4>Activate account in two easy steps</h4>
    <ul class="account-activate-step">
        <li><a href="<?= link_url('supplier/user-plans') ?>">plan</a></li>
        <li>If your account have sufficient balance to purchase plan then go to <strong>manage > plan</strong> menu and activate plan as per your choce</li>
        <li>If your account have not sufficient balance to purchase plan then go to <strong>account > payment</strong> menu and send a balance request or purchase balance online</li>
        <li><a href="<?= link_url('supplier/payment-info') ?>">payment</a></li>
    </ul>
    </div>
</div>
 </div>
 <div class="clearfix"></div>
 </div>