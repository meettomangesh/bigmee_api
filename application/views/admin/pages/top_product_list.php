    
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?= base_url('admin/dashboard') ?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a>Pramotion Products</a></li>
			</ul>
		     <div class="row-fluid">
		                <ul class="table-tab nav nav-tabs" role="tablist">
		                   <li class="nav-item active">
		                     <a class="nav-link " data-toggle="tab" href="#topProduct" role="tab">Top</a>
		                   </li>
		                   <li class="nav-item">
		                     <a class="nav-link" data-toggle="tab" href="#expoProduct" role="tab">Expo</a>
		                   </li>
		                   <li class="nav-item">
		                     <a class="nav-link" data-toggle="tab" href="#advProduct" role="tab">Advertise</a>
		                   </li>
		                </ul> 
		            </div>
		<div class="tab-content">
		  <div class="tab-pane  fade in active" id="topProduct">
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Top Product </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                           <div class="span10">
                              <div class="span2">  
                                <input type="text" class="filter-input-top-product input-small" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-top-product input-small" data-column="4" autocomplete="off" placeholder="Supplier Id">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-top-product input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-top-product input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-top-product input-small" data-column="3">
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="F">Pending</option>
                                  <option value="R">Reject</option>
                                </select>
                              </div>
                            </div>  
                        </div>
                       </div> 
						<table class="table table-striped table-bordered bootstrap-datatable" id="topProductDataTable-ad">
						  <thead>
							  <tr> 
								  <th>PID</th>
								  <th>Txn Id</th>
								  <th>Product</th>
                                  <th>Added date</th> 
                                  <th>Status</th>
								  <th>Price</th>
								  <th>UID</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
                         </table>
                       </div>  
                     
                   </div>
                 </div> 
            </div> 
		  <div class="tab-pane  fade in" id="expoProduct">    
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Expo Product </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                           <div class="span10">
                              <div class="span2">  
                                <input type="text" class="filter-input-expo-product input-small" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-expo-product input-small" data-column="5" autocomplete="off" placeholder="Supplier Id">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-expo-product input-small" data-column="4" autocomplete="off" placeholder="Expo Id">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-expo-product input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-expo-product input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-expo-product input-small" data-column="3">
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="F">Pending</option>
                                  <option value="R">Reject</option>
                                </select>
                              </div>
                            </div>  
                        </div>
                       </div>
						<table class="table table-striped table-bordered bootstrap-datatable" id="expoProductDataTable-ad">
						  <thead>
							  <tr> 
								  <th>Expo Id</th>
								  <th>PID</th>
								  <th>Txn Id</th>
                                  <th>Added date</th>
                                  <th>Product</th> 
								  <th>Base Price</th>
                                  <th>Expo Price</th>
                                  <th>Status</th>
                                  <th>UID</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                         </table>
                       </div>  
                     
                   </div>
                 </div>  
                </div>  
		  <div class="tab-pane  fade in" id="advProduct">    
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Advertise Product </h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                      <div class="row-fluid top-toolbar">
                        <div class="row-fluid">
                           <div class="span10">
                              <div class="span2">  
                                <input type="text" class="filter-input-advertise-product input-small" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-advertise-product input-small" data-column="4" autocomplete="off" placeholder="Supplier Id">
                              </div>
                              <div class="span2">  
                                <input type="text" class="filter-input-advertise-product input-small datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="span2">  
                                <input type="text" class="filter-input-advertise-product input-small datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="span2">  
                                <select class="filter-input-advertise-product input-small" data-column="3">
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="F">Pending</option>
                                  <option value="R">Reject</option>
                                </select>
                              </div>
                            </div>
                        </div>
                       </div>
						<table class="table table-striped table-bordered bootstrap-datatable" id="advProductDataTable-ad">
						  <thead>
							  <tr> 
								  <th>PID</th>
								  <th>Txn Id</th>
								  <th>Product</th>
                                  <th>Added date</th> 
                                  <th>Status</th>
								  <th>Price</th>
								  <th>UID</th>
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
	
