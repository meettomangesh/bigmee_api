
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Refered Discount</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-toolbar">
                        <div class="col-md-4">
                            <ul>
                                <li title="delete selected message"><a href="javascript: void(0)" class="disabled-icon" id="deleteCheckedReferMessage"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                          <div class="floatleft">
                            <strong>Total Income:</strong> <span><?= formateBalance($total_income->total_income) ?></span>
                          </div>
                          <div class="floatright">
                            <button type="button" class="btn btn-primary btn-sm" id="referedRequest"><i class="fa fa-hand-o-right"></i> Refered</button>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>                   
                     <div class="row top-toolbar">
                              <div class="form-group col-md-2">  
                                <input type="text" name="fromDate" id="fromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" name="toDate" id="toDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-3">  
                                <input type="tel" name="mobile" id="mobile" class="form-control" data-column="3" autocomplete="off" placeholder="Mobile no">
                              </div> 
                              <div class="form-group col-md-2">  
                               <select class="form-control" name="status" id="status" data-column="4">
                                   <option value="">Status</option>
                                   <option value="S">Success</option>
                                   <option value="P">Pending</option>
                                   <option value="E">Expired</option>
                               </select>
                              </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="referedDataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" id="checkAll"></th>
								  <th>Date</th>
								  <th>Refered</th>
                                  <th>Income</th>
								  <th>Status</th>
                                  <th>Valid</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                      </table>
                </div>
            </div>
        </div>
    </div>
</section> 