    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Payment</a></li>
			</ul>
		     <div class="row-fluid">
		                <ul class="table-tab nav nav-tabs" role="tablist">
		                   <li class="nav-item active">
		                     <a class="nav-link " data-toggle="tab" href="#paymentRequest" role="tab">Deposite</a>
		                   </li>
		                   <li class="nav-item">
		                     <a class="nav-link" data-toggle="tab" href="#paymentOnline" role="tab">Online</a>
		                   </li>
                       <li class="nav-item">
                         <a class="nav-link" data-toggle="tab" href="#paymentWithdrawal" role="tab">Withdrawal</a>
                       </li>
		                </ul> 
		            </div>
		<div class="tab-content">
		  <div class="tab-pane  fade in active" id="paymentRequest">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Deposite </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                              <div class="span2">  
                                <input type="text" class="data-filter-input input-small" data-column="0" placeholder="Deposite Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-input input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-input input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div> 
                              <div class="span2"> 
                               <select class="data-filter-input form-control input-small" data-column="3">
                               <option value="">Bank Name</option>
                               <?php foreach($bank_data as $bank): ?>
                                   <option><?= $bank['pay_point'].' ( '.$bank['acct_no'].' )' ?></option>
                               <?php endforeach; ?>    
                               </select>
                              </div>
                              <div class="span2">  
                               <select class="data-filter-input form-control input-small" data-column="5">
                               <option value="">Method</option>
                               <?php foreach($pay_point as $point): ?>
                                   <option><?= $point['method_name'] ?></option>
                               <?php endforeach; ?>    
                               </select>
                              </div>
                              <div class="span2">  
                                <select class="data-filter-input input-small" data-column="4">  
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="F">Pending</option>
                                  <option value="R">Reject</option>
                                </select>
                              </div>
                            </div>  
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="paymentRequestDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Deposite Id</th>
                                  <th>Request date</th> 
								  <th>UID</th>
								  <th>Bank</th>
								  <th>Method</th>
                                  <th>Status</th>
								  <th>Amount</th>
                                  <th>Balance</th>
                                  <th>Txn Id</th>
                                  <th>Reference</th>
								  <th>Actions</th>
							  </tr>
						  </thead>
                         </table>
                       </div>  
                     
                   </div>
                 </div>  
                </div>  
		  <div class="tab-pane  fade in" id="paymentOnline">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Online </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                        <div class="row-fluid top-toolbar">
                              <div class="span2">  
                                <input type="text" class="data-filter-online-payment input-small" data-column="0" placeholder="Payment Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-online-payment input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-online-payment input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div> 
                              <div class="span2">  
                                <select class="data-filter-online-payment input-small" data-column="5">  
                                  <option value="">Status</option>
                                  <option value="A">Accept</option>
                                  <option value="P">Pending</option>
                                  <option value="R">Reject</option>
                                </select>
                              </div>
                     </div> 
                    <table class="table table-striped table-bordered" id="paymentOnlineDataTable-ad">
						  <thead>
							  <tr> 
                                  <th>Payment Id</th>
                  <th>Date</th>
                                  <th>UID</th>  
                  <th>Txn Status</th>
								  <th>Amount</th>
								  <th>Balance</th>
                                  <th>Txn Id</th>
                                  <th>Reference</th>
								  <th>Actions</th>
							  </tr>
						  </thead>      
                      </table>
                       </div>  
                     
                   </div>
                 </div>  
                </div> 

      <div class="tab-pane  fade in" id="paymentWithdrawal">
      <div class="row-fluid sortable">    
        <div class="box span12">
          <div class="box-header">
            <h2><i class="halflings-icon white user"></i><span class="break"></span>Withdrawal </h2>
            <div class="box-icon">
              <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
              <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
          </div>
          <div class="box-content">
                        <div class="row-fluid top-toolbar">
                              <div class="span2">  
                                <input type="text" class="data-filter-withdrawal-payment input-small" data-column="0" placeholder="Withdrawal Id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-withdrawal-payment input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="data-filter-withdrawal-payment input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div> 
                              <div class="span2">  
                                <select class="data-filter-withdrawal-payment input-small" data-column="5">  
                                  <option value="">Status</option>
                                  <option value="A">Accept</option>
                                  <option value="P">Pending</option>
                                  <option value="R">Reject</option>
                                </select>
                              </div>
                     </div> 
                    <table class="table table-striped table-bordered" id="paymentWithdrawalDataTable-ad">
              <thead>
                <tr> 
                                  <th>Withdrawal Id</th>
                  <th>Date</th>
                                  <th>UID</th>  
                  <th>Txn Status</th>
                  <th>Amount</th>
                  <th>Balance</th>
                  <th>Bank</th>
                                  <th>Txn Id</th>
                  <th>Actions</th>
                </tr>
              </thead>      
                      </table>
                       </div>  
                     
                   </div>
                 </div>  
                </div> 

              </div>        
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
	<div class="clearfix"></div>
	
