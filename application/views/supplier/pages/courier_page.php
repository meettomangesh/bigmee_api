
<div class="col-lg-10 col-md-9 right-content-panel">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4>Courier Partner</h4>
        </div>
        <div class="panel-body">
            <div class="row top-toolbar">
                <div class="col-md-12">
                    <div class="floatright">
                        <button type="button" class="btn btn-primary btn-sm" id="addCourierPartner"><i class="fa fa-plus"></i> Add</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>                   
            <div class="row top-toolbar">
                <div class="form-group col-md-2">  
                    <input type="text" class="form-control datepicker filter-input-courier" data-column="1" autocomplete="off" placeholder="From date">
                </div> 
                <div class="form-group col-md-2">  
                    <input type="text" class="form-control datepicker filter-input-courier" data-column="2" autocomplete="off" placeholder="To date">
                </div>
                <div class="form-group col-md-2">  
                    <input type="tel" class="form-control filter-input-courier" data-column="3" autocomplete="off" placeholder="Mobile no">
                </div> 
                <div class="form-group col-md-3">  
                    <input type="email" class="form-control filter-input-courier" data-column="4" autocomplete="off" placeholder="Email no">
                </div> 
            </div>
            <table class="table table-striped table-bordered dataTable" id="courierPartnerDataTable">
                <thead>
                    <tr>
                        <th width="4%"><input type="checkbox" name="checkAll" id="checkAll"></th>
                        <th>Date</th>
                        <th>Courier Service</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
            </table>
        </div>
    </div>
</div>
</div>
</section> 