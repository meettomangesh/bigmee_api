
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Outbox</h4>
                    </div>
                    <div class="panel-body">
                    <div class="row top-toolbar">
                        <div class="col-md-4">
                            <ul>
                                <li title="delete selected message"><a href="javascript: void(0)" class="disabled-icon" id="deleteCheckedMessage"><i class="fa fa-trash"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable">
						  <thead>
							  <tr>
                                  <th width="4%"><input type="checkbox" name="checkAll" id="checkAll"></th>
								  <th>Date</th>
                                  <th>Type</th>
								  <th>Reciever</th>
								  <th>Message</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php foreach($outbox as $outbox): ?>
							<tr>
                                <td><input type="checkbox" name="message[]" value="<?= $outbox['msg_id'].','.$outbox['user_msg_id'] ?>" class="messageCheck"></td>
							    <td><?= formateDate($outbox['msg_addon']) ?></td>
                                <td class="center"><?php if($outbox['inbox_type'] == "M") echo "Mobile"; else echo "Email"; ?></td>
								<td class="center"><?= $outbox['reciever'] ?></td>
								<td class="center"><?= shortText($outbox['msg_content']) ?></td>
								<td class="center">
                                <span class="label label-success">success</span>
								</td>
								<td class="center">
									<a class="btn btn-info btn-xs resend-message" href="javascript: void(0)" data-value="<?= $outbox['msg_id'].','.$outbox['user_msg_id'] ?>" data-tooltip="tooltip" data-placement="top" title="Resend">
										<i class="fa fa-reply"></i>  
									</a>
									<a class="btn btn-warning btn-xs forward-message" href="javascript: void(0)" data-value="<?= $outbox['msg_id'].','.$outbox['user_msg_id'] ?>" data-tooltip="tooltip" data-placement="top" title="Forward">
										<i class="fa fa-mail-forward"></i> 
									</a>
									<a class="btn btn-danger btn-xs delete-message" href="javascript: void(0)" data-value="<?= $outbox['msg_id'].','.$outbox['user_msg_id'] ?>" data-tooltip="tooltip" data-placement="top" title="delete">
										<i class="fa fa-trash"></i> 
									</a>
								</td>
							</tr>
                        <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>    

<script>
    $('.dataTable').DataTable( {
        "order": [[ 2, "desc" ]],
        scrollY: 800,
        scrollCollapse: true,
        "columnDefs": [{
            "targets": [0, -1],
            "orderable": false
            }]
    } );
</script>