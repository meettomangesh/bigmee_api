<!-- style content section start --> <div style="display: none;"><? print_r($sp_profile) ?></div>
		<section class="pages contact-page section-padding-bottom">
            <div class="container">   
                    <h2>Contact Us</h2>         
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 contact-content">  
                                <div class="col-md-12">
                                    <div id="gmaps">
                                        <iframe src="<?= $sp_profile->google_map ?>" allowfullscreen></iframe>

                                    </div>
                                </div>
                                
                                <div class="col-md-12 section-padding-top">
                                   <div class="col-md-6">
                                    <h4><i class="fa fa-envelope"></i> Contact With Us</h4>
                                     <form class="cendo form-style2" id="spContactForm">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Your Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">E-Mail</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="email">
                                                <input type="hidden" name="sp" value="<?= $sp_profile->uacct_id ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Enquiry</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="8" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input class="btn btn-primary" type="submit" value="Send">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                   <div class="col-md-6">
                                        <h4><i class="fa fa-phone"></i> Contact Directly</h4>
                                            <ul class="supplier-contact">
                                                <li>
                                                    <i class="fa fa-envelope"></i>
                                                    <strong>Email</strong>
                                                    <span><?= $sp_profile->uacct_email  ?></span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone"></i>
                                                    <strong>Contact</strong>
                                                    <span>+91 <?= $sp_profile->c_contact ?></span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-map"></i>
                                                    <strong>Location</strong>
                                                    <span><?= $sp_profile->c_addr ?></span>
                                                </li>
                                            </ul>
                                    </div>     
                                </div>                            
                            </div>
                    </div>
           </div>
		</section>
		<!-- style  content section end -->