
                       <div class="row"> 
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h5>Master Admin</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->ma_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->ma_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->ma_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->ma_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h5>Admin</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->ad_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->ad_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->ad_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->ad_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h5>Account</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->at_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->at_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->at_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->at_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h5>Sales</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->sl_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->sl_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->sl_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->sl_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h5>Support</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->su_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->su_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->su_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->su_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h5>Agency</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->ag_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->ag_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->ag_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->ag_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h5>State Business Developer</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->sbd_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->sbd_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->sbd_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->sbd_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h5>District Business Developer</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->dbd_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->dbd_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->dbd_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->dbd_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h5>Taluka Business Developer</h5>
                                    <div class="panel-toolbar">
                                        <ul>
                                            <li>
                                                <a href="javascript: void(0)" onclick="return loadComplaintForm('<?= $support->tbd_support->acct_id ?>')">
                                                    <i class="fa fa-check-square"></i>
                                                </a>    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="data-list">
                                        <li>
                                            <strong>Name</strong>
                                            <span><?= $support->tbd_support->user_name ?></span>
                                        </li>
                                        <li>
                                            <strong>Contact</strong>
                                            <span><?= $support->tbd_support->acct_mobile ?></span>
                                        </li>
                                        <li>
                                            <strong>Email</strong>
                                            <span><?= $support->tbd_support->acct_email ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      </div> 