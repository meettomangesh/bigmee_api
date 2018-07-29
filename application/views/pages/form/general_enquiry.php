										<div class="main-view enquiry-dailog">
                                            <div class="panel">
                                             <div class="panel-body">   
                                                <form class="form-horizontal form-style2" id="generalEnquiryForm">
                                                    <fieldset>
                                                        <div class="form-group relative">
                                                                <select class="ui-select form-control" name="mcat_name">
                                                                    <option value="">--Select Group--</option>
                                                                  <?php foreach($main_cat as $cat): ?>  
                                                                    <option value="<?= $cat['mcat_id'] ?>"><?= $cat['mcat_name'] ?></option>
                                                                  <?php endforeach ?>  
                                                                </select>
                                                        </div>
                                                    
                                                        <div class="form-group relative">
                                                                <input class="form-control" name="fname" type="text" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group relative">
                                                                <input class="form-control" name="lname" type="text" placeholder="Last Name">
                                                            </div>
                                                        <div class="form-group relative">
                                                                <input class="form-control" name="email" type="email" placeholder="E-Mail">
                                                            </div>
                                                        <div class="form-group relative">
                                                                <input class="form-control" name="mobile" id="mobile" type="tel" placeholder="Mobile No">
                                                            </div>
                                                        <div class="form-group relative">
                                                                <textarea class="form-control" name="addr" id="addr" placeholder="Full address"></textarea>
                                                            </div>
                                                        <div class="form-group relative">
                                                                <textarea class="form-control" name="msg" id="msg" placeholder="Enter your requirement" rows="5"></textarea>
                                                            </div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="text-center">
                                                            <button class="btn btn-success ce5" type="submit" id="send">Send</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- panel body end -->
                                           </div> <!-- panel end --> 
                                        </div>