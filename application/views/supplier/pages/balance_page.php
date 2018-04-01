            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Transaction</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-toolbar">
                        <div class="row">
                              <div class="form-group col-md-2">  
                                <input type="text" data-column="0" class="filter-input-supplier-txn form-control" placeholder="Txn id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" data-column="1" class="filter-input-supplier-txn form-control datepicker" placeholder="From date" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text"  data-column="2" class="filter-input-supplier-txn form-control datepicker" placeholder="To date" autocomplete="off">
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="filter-input-supplier-txn form-control" data-column="3">  
                                  <option value="">Txn Type</option>
                                  <option value="credit">Credit</option>
                                  <option value="debit">Debit</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">  
                                <select class="filter-input-supplier-txn form-control" data-column="4">  
                                  <option value="">Bal Type</option>
                                  <option value="0">Active</option>
                                  <option value="1">Wallet</option>
                                  <option value="2">Lock</option>
                                </select>
                              </div>
                        </div>
                    </div>
                    <hr />
                    <table class="table table-striped table-bordered dataTable" id="txnDataTable">
						  <thead>
							  <tr>
                                  <th>Txn Id</th>
								  <th>Date</th>
								  <th>Transaction</th>
                                  <th>Reference</th>
								  <th>Amount</th>
                                  <th>Acct Bal</th>
                                  <th>Bal Type</th>
                                  <th>Action</th>
							  </tr>
						  </thead>   
                      </table>
                    </div>
                    <div class="panel-footer text-center">   
                    </div> 
                </div>
            </div>  
            
        </div>
    </div>
</section>        