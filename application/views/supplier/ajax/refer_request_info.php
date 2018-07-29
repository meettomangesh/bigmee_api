 <?php if($this->uri->segment('1') == 'admin'): ?>
    <div class="box box-content">          
                <div class="row-fluid">
                    <div class="span12">
                        <ul class="data-list">
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $refered_data->mobile_no ?></span>
                            </li>
                            <li>
                                <strong>Income</strong>
                                <span><?= $refered_data->refer_income ?></span>
                            </li>
                            <li>
                                <strong>Valid Up to</strong>
                                <span><?= formateDate($refered_data->validity_date) ?></span>
                            </li>
                            <li>
                                <strong>Status</strong>
                                <?php if($refered_data->refer_status == "S"): $class = "success"; $status = "Success"; elseif($refered_data->refer_status == "P"): $class = "warning"; $status = "Pending"; elseif($refered_data->refer_status == "E"): $class = "important"; $status = "Expired"; endif;; ?>
                                <span><label class="label label-<?= $class ?>"><?= $status ?></label></span>
                            </li>
                            <li>
                                <strong>Message</strong>
                                <span><?= $refered_data->refer_message ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
<?php else: ?>    
             <div class="row">             
                <div class="panel panel-success">
                    <div class="panel-body">
                        <ul class="enquiry-data-list">
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $refered_data->mobile_no ?></span>
                            </li>
                            <li>
                                <strong>Income</strong>
                                <span><?= $refered_data->refer_income ?></span>
                            </li>
                            <li>
                                <strong>Valid Up to</strong>
                                <span><?= formateDate($refered_data->validity_date) ?></span>
                            </li>
                            <li>
                                <strong>Status</strong>
                                <?php if($refered_data->refer_status == "S"): $class = "success"; $status = "Success"; elseif($refered_data->refer_status == "P"): $class = "warning"; $status = "Pending"; elseif($refered_data->refer_status == "E"): $class = "danger"; $status = "Expired"; endif;; ?>
                                <span><label class="label label-<?= $class ?>"><?= $status ?></label></span>
                            </li>
                            <li>
                                <strong>Message</strong>
                                <span><?= $refered_data->refer_message ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
<?php endif; ?>                