										<div class="main-view enquiry-dailog">
                                            <div class="panel">
                                             <div class="panel-body">   
                                                <form class="form-horizontal form-style2" id="productEnquiryForm">
                                                    <fieldset>
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
                                                                <textarea class="form-control" name="msg" id="msg" placeholder="Enter your message"></textarea>
                                                            </div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="text-center">
                                                        <?php if($product_data->stock_status == 1): ?>
                                                            <button class="btn btn-success ce5" type="submit" id="send">Send</button>
                                                        <?php else: ?>
                                                            <p class="text-danger">Currently this product is out of stock please try when this product in stock</p>
                                                        <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> <!-- panel body end -->
                                           </div> <!-- panel end --> 
                                        </div>