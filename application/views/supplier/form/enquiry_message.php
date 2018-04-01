
<div class="row">
    <ul class="product-tab supplier-tab nav nav-tabs" role="tablist">
        <li class="nav-item active">
            <a class="nav-link " data-toggle="tab" href="#sms" role="tab">SMS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#email" role="tab">Email</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#whatsapp" role="tab">Whatsapp</a>
        </li>
    </ul>    
</div>

<div class="tab-content">
    <div class="tab-pane  fade in active" id="sms">
        <form class="form-style2" id="sendSmsForm">
            <input type="hidden" name="type" value="M">
                <div class="row">
                    <div class="form-group col-sm-5">
                        <input type="tel" class="form-control1" name="mobile" placeholder="Type number to send message..." value="<?= $enquiry_data->enq_contact ?>" autocomplete="off">
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-sm-8">
                    <textarea class="form-control1" name="msg" id="msg" rows="6" placeholder="Type your message..."></textarea>
                </div>
            </div>
            <div class="row text-center">
                <button class="btn btn-success ce5" type="submit">Send</button>
            </div>	
        </form>
    </div>
    <div class="tab-pane  fade in" id="email">
        <form class="form-style2" id="sendEmailForm">
            <input type="hidden" name="type" value="E">
                <div class="row">
                    <div class="form-group col-sm-5">
                        <input type="email" class="form-control1" name="email" value="<?= $enquiry_data->enq_email ?>" placeholder="Type email to send email..." autocomplete="off">
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-sm-8">
                    <textarea class="form-control1" name="msg" rows="6" id="msg" placeholder="Type your message..."></textarea>
                </div>
                <div class="form-group col-md-4">
                    <p><label class="control-label">Attachment</label></p>
                    <span class="btn btn-primary btn-file btn-sm">
                        <i class="fa fa-file-image-o"></i> Browse 
                        <input type="file" name="attachment" id="emailAttachment">
                    </span>
                    <span class="active-help" data-toggle="popover" data-trigger="hover" data-content="Attach image file, or document files" data-placement="left" data-original-title="" title=""></span>
                </div>
            </div>	
            <div class="row text-center">
                <button class="btn btn-success ce5" type="submit">Send</button>
            </div>
        </form>
    </div>
    <div class="tab-pane  fade in" id="whatsapp">
        <form class="form-style2" id="sendWhatsappForm">
            <input type="hidden" name="type" value="W">
                <div class="row">
                    <div class="form-group col-sm-5">
                        <input type="tel" class="form-control1" name="mobile" value="<?= $enquiry_data->enq_contact ?>" placeholder="Type number to send whatsapp..." autocomplete="off">
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-sm-8">
                    <textarea class="form-control1" name="msg" rows="6" id="msg" placeholder="Type your message..."></textarea>
                </div>
                <div class="form-group col-md-4">
                    <p><label class="control-label">Attachment</label></p>
                    <span class="btn btn-primary btn-file btn-sm">
                        <i class="fa fa-file-image-o"></i> Browse 
                        <input type="file" name="attachment"  id="whatsappAttachment">
                    </span>
                    <span class="active-help" data-toggle="popover" data-trigger="hover"  data-content="Attach image files, or document files" data-placement="left" data-original-title="" title=""></span>
                </div>
            </div>	
            <div class="row text-center">
                <button class="btn btn-success ce5" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>		
