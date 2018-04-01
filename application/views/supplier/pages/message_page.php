<script src="<?= base_url('dist/js/bootstrap-datepicker.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('dist/css/datepicker.css') ?>" />
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Inbox</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                      <ul class="product-tab supplier-tab nav nav-tabs" role="tablist">
                          <li class="nav-item active">
                            <a class="nav-link " data-toggle="tab" href="#inbox" role="tab">Inbox</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#outbox" role="tab">Outbox</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#reminder" role="tab">Reminder</a>
                          </li>
                      </ul>    
                    </div>
                
                <div class="tab-content">
					<div class="tab-pane  fade in active" id="inbox">
                    <div class="row top-toolbar">
                        <div class="col-md-2">
                            <ul>
                                <li title="delete selected message"><a href="javascript: void(0)" class="disabled-icon deleteCheckedMessage" id="deleteCheckedMessage"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                         <div class="col-md-10">
                              <div class="form-group col-md-2">  
                                <input type="tel" class="form-control filter-input-inbox" data-column="0" autocomplete="off" placeholder="Sender no">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-inbox" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-inbox" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-2">  
                               <select class="form-control filter-input-inbox" data-column="3">
                                   <option value="">Type</option>
                                   <option value="M">Sms</option>
                                   <option value="E">Email</option>
                                   <option value="W">Whatsapp</option>
                               </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="inboxMessageDataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" class="checkAll"></th>
								  <th>Inbox Id</th>
								  <th>Date</th>
                  <th>Type</th>
								  <th>Sender</th>
								  <th>Message</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                      </table>
                     </div>
					<div class="tab-pane  fade in" id="outbox">
                    <div class="row top-toolbar">
                        <div class="col-md-1">
                            <ul>
                                <li title="delete selected message"><a href="javascript: void(0)" class="disabled-icon deleteCheckedMessage" id="deleteCheckedMessage"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                         <div class="col-md-11">
                              <div class="form-group col-md-1">
                                  <a href="javascript: void(0)" id="sendNewMessage" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i></a>
                              </div>
                              <div class="form-group col-md-3">  
                                <input type="tel" class="form-control filter-input-outbox" data-column="0" autocomplete="off" placeholder="Reciver">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-outbox" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-2">  
                                <input type="text" class="form-control datepicker filter-input-outbox" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                              <div class="form-group col-md-2">  
                                <input type="tel" class="form-control filter-input-outbox" data-column="4" autocomplete="off" placeholder="Txn id">
                              </div>
                              <div class="form-group col-md-2">  
                               <select class="form-control filter-input-outbox" data-column="3">
                                   <option value="M">Sms</option>
                                   <option value="E">Email</option>
                                   <option value="W">Whatsapp</option>
                               </select>
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="outboxMessageDataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" class="checkAll"></th>
								  <th>Outbox Id</th>
								  <th>Date</th>
                  <th>Txn id</th>
                  <th>Type</th>
								  <th>Reciever</th>
								  <th>Message</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
                      </table>
                    </div>
					<div class="tab-pane  fade in" id="reminder"> 
                    <div class="row top-toolbar">
                        <div class="col-md-2">
                            <ul>
                                <li title="delete selected reminders"><a href="javascript: void(0)" class="disabled-icon" id="deleteCheckedReminder"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                         <div class="col-md-10">
                              <div class="form-group col-md-3">  
                                <input type="tel" name="remMsgId" id="remMsgId" class="form-control" data-column="0" autocomplete="off" placeholder="Message id">
                              </div> 
                              <div class="form-group col-md-3">  
                                <input type="text" name="remfromDate" id="remfromDate" class="form-control datepicker" data-column="1" autocomplete="off" placeholder="From date">
                              </div> 
                              <div class="form-group col-md-3">  
                                <input type="text" name="remtoDate" id="remtoDate" class="form-control datepicker" data-column="2" autocomplete="off" placeholder="To date">
                              </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable" id="reminderMessageDataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" class="checkAll"></th>
								  <th>Create date</th>
								  <th>Message Id</th>
                                  <th>Type</th>
								  <th>Date</th>
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
</section> 