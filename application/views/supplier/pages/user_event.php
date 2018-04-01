
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>User Events</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                      <ul class="supplier-tab product-tab nav nav-tabs" role="tablist">
                          <li class="nav-item active">
                            <a class="nav-link " data-toggle="tab" href="#event" role="tab">Events</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#participated" role="tab">Participated</a>
                          </li>
                      </ul>    
                    </div>
                 <div class="tab-content">
					<div class="tab-pane  fade in active" id="event">
                    <div class="row top-toolbar">
                        <div class="col-md-8">
                              <div class="form-group col-md-3">  
                                <input type="text" name="event_id" data-column="0" id="event_id" class="form-control" placeholder="Event id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-3">  
                                <input type="text" name="fromDate"  data-column="1" id="fromDate" class="form-control datepicker" placeholder="From date" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-3">  
                                <input type="text" name="toDate"  data-column="2" id="toDate" class="form-control datepicker" placeholder="To date" autocomplete="off">
                              </div>
                         </div>
                    </div>
                     <table class="table table-striped table-bordered dataTable" id="eventDataTable">
						  <thead>
							  <tr>
                                  <th>Id</th>
								  <th>Date</th>
                                  <th>Title</th>
								  <th>Charge</th>
								  <th>Place</th>
                                  <th>Action</th>
							  </tr>
						  </thead>   
                      </table>
                      </div>
                      
					<div class="tab-pane  fade in" id="participated">
                    <div class="row top-toolbar">
                        <div class="col-md-8">
                              <div class="form-group col-md-3">  
                                <input type="text" name="book_id" data-column="0" id="book_id" class="form-control" placeholder="Booking id" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-3">  
                                <input type="text" name="bFromDate"  data-column="1" id="bFromDate" class="form-control datepicker" placeholder="From date" autocomplete="off">
                              </div> 
                              <div class="form-group col-md-3">  
                                <input type="text" name="bToDate"  data-column="2" id="bToDate" class="form-control datepicker" placeholder="To date" autocomplete="off">
                              </div>
                         </div>
                    </div>
                     <table class="table table-striped table-bordered dataTable" id="participatedEventDataTable">
						  <thead>
							  <tr>
                                  <th>Book Id</th>
                                  <th>Event</th>
								  <th>Date</th>
								  <th>Paid Amt</th>
								  <th>Place</th>
                                  <th>Action</th>
							  </tr>
						  </thead>   
						 <!-- <tbody>
                          <?php foreach($participated_event as $events): ?>
							<tr>
                                <td class="center"><?= $events["event_title"] ?></td>
                                <td class="center"><?= formateDate($events["event_bookedon"]) ?></td>
								<td class="center"><?= formateBalance($events["txn_amount"]) ?></td>
                                <td class="center"><?= $events["event_place"] ?></td>
								<td class="center">
									<a class="btn btn-info btn-xs print-event-inno" href="javascript: void(0)" data-value="<?= $events["event_book_id"] ?>"  data-tooltip="tooltip" data-placement="top" title="print">
										<i class="fa fa-print"></i>  
									</a>
								</td>
							</tr>
                            <?php endforeach; ?>
                          </tbody> -->
                      </table>
                    </div>
                   </div> 
                  </div>
                 <div class="panel-footer text-center">   
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>       