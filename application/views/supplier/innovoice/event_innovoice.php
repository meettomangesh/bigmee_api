
<?php if($this->uri->segment(1) == 'admin'): ?>
    <div class="box box-content innovoice">  
    <div class="row-fluid">
          <h3>Event Pass</h3>
          <ul class="data-list">
              <li><strong>Event</strong><span><?= $event_print->event_title; ?></span></li>
              <li><strong>Event Time</strong><span><?= formateDate($event_print->event_date) ?></span></li>
              <li><strong>Price</strong><span><?= formateBalance($event_print->event_price) ?> INR</span></li>
              <li><strong>City</strong><span><?= $event_print->event_place  ?></span></li>
              <li><strong>Location</strong><span><?= $event_print->event_addr  ?></span></li>
              <li><strong>Txn Date</strong><span><?= formateDate($event_print->txn_addon)  ?></span></li>
              <li><strong>Paid Amount</strong><span><?= formateBalance($event_print->txn_amount)  ?> INR</span></li>
          </ul>
        <div class="span12">
          <p class="text text-danger"><strong>Note:</strong> Please always carry a print of this event pass with you when you come for event, if pass is not with you then you can't attend event.</p>
        </div> 
      </div> 
    </div>
<?php else: ?>
  <div class="panel panel-info">
  <div class="panel-heading">
      <h3>Event Pass</h3>
   </div>   
   <div class="panel-body innovoice">
      <ul>
          <li><strong>Event</strong><span><?= $event_print->event_title; ?></span></li>
          <li><strong>Event Time</strong><span><?= formateDate($event_print->event_date) ?></span></li>
          <li><strong>Price</strong><span><?= formateBalance($event_print->event_price) ?> INR</span></li>
          <li><strong>City</strong><span><?= $event_print->event_place  ?></span></li>
          <li><strong>Location</strong><span><?= $event_print->event_addr  ?></span></li>
          <li><strong>Txn Date</strong><span><?= formateDate($event_print->txn_addon)  ?></span></li>
          <li><strong>Paid Amount</strong><span><?= formateBalance($event_print->txn_amount)  ?> INR</span></li>
      </ul>
    </div> 
    <div class="panel-footer">
      <p class="text text-danger"><strong>Note:</strong> Please always carry a print of this event pass with you when you come for event, if pass is not with you then you can't attend event.</p>
    </div> 
  </div>    
<?php endif; ?>  