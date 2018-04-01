
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Pramotion</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                      <ul class="supplier-tab product-tab nav nav-tabs" role="tablist">
                          <li class="nav-item active">
                            <a class="nav-link " data-toggle="tab" href="#top" role="tab">Top</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#expo" role="tab" id="expoTable">Expo</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#adv" role="tab" id="advTable">Advertisement</a>
                          </li>
                      </ul>    
                    </div>
                <div class="tab-content">
					<div class="tab-pane  fade in active" id="top">
                    <div class="row top-toolbar">
                        <div class="col-md-10">
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control filter-input-top-prod" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control filter-input-top-prod datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-top-prod" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="form-control filter-input-top-prod" name="status" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="R">Reject</option>
                                  <option value="F">Pending</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="topProductDataTable">
						  <thead>
							  <tr>
								  <th>Product Id</th>
								  <th>Date</th>
                                  <th>Txn Id</th>
								  <th>Status</th>
								  <th>Price</th>
								  <th>Start</th>
								  <th>End</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                      </table>
                     </div>
                     
					<div class="tab-pane  fade in" id="expo">
                    <div class="row top-toolbar">
                        <div class="col-md-10">
                              <div class="form-group col-md-2">  
                                <input type="text" name="expoprodId" id="expoprodId" class="form-control" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="expofromDate" id="expofromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="expotoDate" id="expotoDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="form-control" name="expoStatus" id="expoStatus" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="R">Reject</option>
                                  <option value="F">Pending</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="expoProductDataTable">
						  <thead>
							  <tr>
								  <th>Prod Id</th>
								  <th>Date</th>
								  <th>Product Amt</th>
								  <th>Expo Amt</th>
								  <th>Discount</th>
                                  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>      
                      </table>
                     </div>
                      
                      
					<div class="tab-pane  fade in" id="adv">
                    <div class="row top-toolbar">
                        <div class="col-md-10">
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control filter-input-adv-prod" data-column="0" placeholder="Product id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-adv-prod" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-adv-prod" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="form-control filter-input-adv-prod" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="T">Accept</option>
                                  <option value="R">Reject</option>
                                  <option value="F">Pending</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="advProductDataTable">
						  <thead>
							  <tr>
								  <th>Product Id</th>
								  <th>Date</th>
								  <th>Txn Id</th>
								  <th>Status</th>
								  <th>Price</th>
								  <th>Start</th>
								  <th>End</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                      </table>
                     </div>
                                                                  
                    </div>
                    <div class="panel-footer text-center">   
                    </div> 
                </div>
            </div>
            
        </div>
    </div>
</section>     