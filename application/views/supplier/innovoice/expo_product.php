
<div class="panel panel-info">
<div class="panel-heading">
    <h4>Expo Pass</h4>
 </div>   
 <div class="panel-body innovoice">
    <ul>
        <li><strong>Expo</strong><span><?= $expo_print->expo_title; ?></span></li>
        <li><strong>Expo Start</strong><span><?= formateDate($expo_print->expstart_date, 1) ?></span></li>
        <li><strong>Expo End</strong><span><?= formateDate($expo_print->expend_date, 1) ?></span></li>
        <li><strong>Product</strong><span><?= $expo_print->prod_title; ?></span></li>
        <li><strong>Product Price</strong><span><?= formateBalance($expo_print->prod_price) ?></span></li>
        <li><strong>Expo Price</strong><span><?= formateBalance($expo_print->expo_price) ?></span></li>
        <li><strong>Charge</strong><span><?= formateBalance($expo_print->txn_amount) ?> INR</span></li>
        <li><strong>Txn Date</strong><span><?= formateDate($expo_print->txn_addon)  ?></span></li>
    </ul>
  </div> 
</div>    