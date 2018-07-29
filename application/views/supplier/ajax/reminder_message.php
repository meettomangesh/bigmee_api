 
             <div class="row">             
                <div class="panel panel-success">
                    <div class="panel-body">
                        <ul class="enquiry-data-list">
                            <li>
                                <strong>Reminder Date</strong>
                                <span><?= formateDate($reminder_message->reminder_date) ?></span>
                            </li>
                            <li>
                                <strong>Message Id</strong>
                                <span><?= $reminder_message->msg_id ?></span>
                            </li>
                            <li>
                                <strong>Type</strong>
                                <?php if($reminder_message->msg_type == "M"): $class = "success"; $type =" Mobile"; elseif($reminder_message->msg_type == "E"): $class = "warning"; $type =" Email"; endif; ?>
                                <span><label class="label label-<?= $class ?>"><?= $type ?></label></span>
                            </li>
                            <li>
                                <strong>Reminder Note</strong>
                                <span><?= $reminder_message->reminder_note ?></span>
                            </li>
                            <li>
                                <strong>Original Msg</strong>
                                <span><?= $reminder_message->msg_content ?></span>
                            </li>
                        </ul>
                    </div>
                </div>