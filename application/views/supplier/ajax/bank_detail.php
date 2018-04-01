 
             <div class="container">      
            <?php foreach($bank_data as $bank): ?>        
                <div class="panel panel-success col-md-6">
                    <div class="panel-heading">
                        <h4><?= $bank['pay_point'] ?> <a href="javascript: void(0)" onclick="return sendCompanyBankDetails('<?= $bank['acct_id'] ?>')"> <i class="fa fa-envelope panel-header-tool"></i></a></h4>
                    </div>
                    <div class="panel-body">
                        <ul class="enquiry-data-list">
                            <li>
                                <strong>Account Name</strong>
                                <span><?= $bank['acct_name'] ?></span>
                            </li>
                            <li>
                                <strong>Accout No</strong>
                                <span><?= $bank['acct_no'] ?></span>
                            </li>
                            <li>
                                <strong>IFC Code</strong>
                                <span><?= $bank['acct_ifccode'] ?></span>
                            </li>
                            <li>
                                <strong>Branch</strong>
                                <span><?= $bank['acct_branch'] ?></span>
                            </li>
                            <li>
                                <strong>Methods</strong>
                                <span><?= $bank['pay_method'] ?></span>
                            </li>
                        </ul>   
                    </div>
                </div>
            <?php endforeach; ?>             
             </div>   