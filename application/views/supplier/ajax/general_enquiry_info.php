<?php if ($this->uri->segment(1) == 'supplier'): ?>
    <div class="row">     
        <div class="col-md-6">        
            <div class="panel panel-success">
                <div class="panel-header">
                    <h4>Customer Details</h4>
                </div>
                <div class="panel-body">
                    <ul class="enquiry-data-list">
                        <li>
                            <strong>Name</strong>
                            <span><?= $enquiry->enq_name ?></span>
                        </li>
                        <li>
                            <strong>Mobile</strong>
                            <span><?= $enquiry->enq_contact ?></span>
                        </li>
                        <li>
                            <strong>Email</strong>
                            <span><?= $enquiry->enq_email ?></span>
                        </li>
                        <li>
                            <strong>Address</strong>
                            <span><?= $enquiry->enq_addr ?></span>
                        </li>
                        <li>
                            <strong>Requirement</strong>
                            <span><?= $enquiry->enq_message ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">        
            <div class="panel panel-success">
                <div class="panel-header">
                    <h4>Order Details</h4>
                </div>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="box">
        <div class="box-content">
            <div class="row-fluid">             
                <div class="panel panel-success">
                    <div class="panel-header">
                        <h4>Customer Details</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="data-list">
                            <li>
                                <strong>Name</strong>
                                <span><?= $enquiry->enq_name ?></span>
                            </li>
                            <li>
                                <strong>Mobile</strong>
                                <span><?= $enquiry->enq_contact ?></span>
                            </li>
                            <li>
                                <strong>Email</strong>
                                <span><?= $enquiry->enq_email ?></span>
                            </li>
                            <li>
                                <strong>Address</strong>
                                <span><?= $enquiry->enq_addr ?></span>
                            </li>
                            <li>
                                <strong>Requirement</strong>
                                <span><?= $enquiry->enq_msg ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>               