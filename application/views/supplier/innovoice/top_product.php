
<div class="panel panel-info">
<div class="panel-heading">
    <h4>Top product print</h4>
 </div>   
 <div class="panel-body innovoice">
    <ul>
        <li><strong>Product</strong><span><?= $topProduct_print->prod_title; ?></span></li>
        <li><strong>Price</strong><span><?= formateBalance($topProduct_print->prod_price) ?></span></li>
        <li><strong>Discount</strong><span><?= formateBalance($topProduct_print->prod_discount) ?> INR</span></li>
        <li><strong>Charge</strong><span><?= $topProduct_print->txn_amount  ?></span></li>
        <li><strong>Txn Date</strong><span><?= formateDate($topProduct_print->txn_addon)  ?></span></li>
     </ul>
  </div> 
  <div class="panel-footer">
    
</div>    