
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Support</h4>
                    </div>
                    <div class="panel-body"> 

                    <div class="row">
                      <ul class="supplier-tab product-tab nav nav-tabs" role="tablist">
                          <li class="nav-item active">
                            <a class="nav-link " data-toggle="tab" href="#comapany-support" role="tab">Support</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#support-complaint" role="tab">Complaint</a>
                          </li>
                      </ul>    
                    </div>

                    <div class="tab-content">
                       <div class="tab-pane  fade in active" id="comapany-support">
                        </div>
                        <div class="tab-pane  fade in" id="support-complaint">             
                         <div class="row top-toolbar">
                             <div class="col-md-12">
                                  <div class="form-group col-md-2">  
                                    <input type="tel" class="input-filter-complaint form-control" placeholder="Complaint id" data-column="0" autocomplete="off">
                                  </div> 
                                  <div class="form-group col-md-2">  
                                    <input type="text" class="input-filter-complaint form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                                  </div> 
                                  <div class="form-group col-md-2">  
                                    <input type="text" class="input-filter-complaint form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                                  </div>
                                  <div class="form-group col-md-2">  
                                   <select class="input-filter-complaint form-control" data-column="3">
                                       <option value="">Status</option>
                                       <option value="0">Open</option>
                                       <option value="1">Close</option>
                                   </select>
                                  </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered dataTable" id="supplierComplaintDataTable">
                              <thead>
                                  <tr>
                                      <th>Comp Id</th>
                                      <th>Date</th>
                                      <th>To</th>
                                      <th>Role</th>
                                      <th>Complaint</th>
                                      <th>Status</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>   
                          </table>
                        </div>
                    </div>

                    </div>    
                  </div>
                </div>
            </div>
        </div>
    </div>
</section> 