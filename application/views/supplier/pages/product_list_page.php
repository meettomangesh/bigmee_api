
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Product List</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-toolbar">
                        <div class="col-md-4">
                            <ul>
                                <li title="delete selected contact"><a href="javascript: void(0)" class="disabled-icon" id="deleteCheckedProduct"><i class="fa fa-trash"></i></a></li>
                                <li title="add in top list"><a href="javascript: void(0)" class="disabled-icon" id="addCheckedToTopList"><i class="fa fa-thumbs-up disabled-icon"></i></a></li>
                            </ul>
                        </div>
                      </div>  
                    <div class="row top-toolbar">
                        <div class="col-md-10">
                              <div class="form-group col-md-2">  
                                <input type="text" name="prodId" id="prodId" class="form-control" data-column="0" placeholder="product id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="fromDate" id="fromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="from date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="toDate" id="toDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="to date">
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="form-control" name="status" id="status" data-column="3">  
                                  <option value="">Status</option>
                                  <option value="1">Approve</option>
                                  <option value="0">Rejected</option>
                                </select>
                              </div>
                              <div class="form-group col-md-3">  
                                <select class="form-control" name="sub_category" id="sub_category" data-column="4">
                                  <option value="">Category</option>
                                <?php foreach($business_category as $service): ?>
                                 <option value="<?= $service['bcat_id'] ?>"><?= $service['bcat_name'] ?></option>
                                <?php endforeach; ?> 
                                </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="productDataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" id="checkAll"></th>
								  <th>Id</th>
                                  <th>Name</th>
								  <th>Upload Date</th>
								  <th>Category</th>
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
</section>   