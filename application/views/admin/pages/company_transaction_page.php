    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Company Transaction</a></li>
			</ul>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Transaction </h2>
						<div class="box-icon">
                        <?php if($profile->acct_role == "SA"): ?>
							<a href="javascript: void(0)" id="createBalanceBtn"><i class="halflings-icon white plus"></i></a>
						<?php endif; ?>
                        <?php if(in_array($this->session->userdata('type'), $bal_transfer_role)): ?>
							<a href="javascript: void(0)" id="transferBalance"><i class="halflings-icon white share"></i></a>
                        <?php endif; ?>
                        	<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="filter-input-txn-company input-small" data-column="0" placeholder="Txn Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-txn-company input-small" data-column="5" placeholder="Acct Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-txn-company input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-txn-company input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-txn-company input-small" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="credit">Credit</option>
                                  <option value="debit">Debit</option>
                                </select>
                              </div>
                              <div class="span2">  
                                <select class="filter-input-txn-company input-small" data-column="4">  
                                  <option value="">Balance</option>
                                  <option value="0">Active</option>
                                  <option value="1">Wallet</option>
                                  <option value="2">Lock</option>
                                </select>
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="companyTxnDataTable-ad">
						  <thead>
							  <tr> 
								  <th>Txn Id</th>
                                  <th>Txn date</th> 
								  <th>Acct ID</th>
								  <th>Mobile</th>
								  <th>Txn amt</th>
								  <th>Txn type</th>
                                  <th>Balance</th>
                                  <th>Txn reference</th>
                                  <th>Type</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div>    
                          
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
