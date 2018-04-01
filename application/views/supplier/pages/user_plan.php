
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>User Plans</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-sp-helpbar">
                     <div class="col-md-6 balance-info">
                        <ul>
                            <li><strong>My Plan:</strong> <span><a href="javascript: void(0)" onclick="supplierPlanInfo('<?= $current_plan->plan_id ?>')" data-tooltip="tooltip" data-placement="top" title="view"><?= $current_plan->plan_name ?></a></span></li>
                            <li><strong>Activated:</strong> <span><?= formateDate($current_plan->userplan_addon,1)  ?></span></li>
                            <li><strong>Charges:</strong> <span><?= formateBalance($current_plan->txn_amount)  ?></span></li>
                            <li><strong>Validity Till:</strong> <span><?= formateDate($profile->uacct_validity,1)  ?></span></li>
                        </ul>
                     </div>
                   </div>  
                     <table class="table table-striped table-bordered" id="spPlanDataTable">
						  <thead>
							  <tr>
                                  <th>Plan</th>
								  <th>Price</th>
								  <th>Validity (day's)</th>
								  <th>Product Limit</th>
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