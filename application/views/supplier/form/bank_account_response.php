
<div class="container">
   <form class="form-style2" id="bankAccountForm">
     <div class="row">
            <div class="col-md-8">
          		  <ul class="data-list">
          		  		<li>
          		  			<strong>IFC Code </strong>
          		  			<span><?= $api_response->IFSC ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>Bank </strong>
          		  			<span><?= $api_response->BANK ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>Branch </strong>
          		  			<span><?= $api_response->BRANCH ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>Address </strong>
          		  			<span><?= $api_response->ADDRESS ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>Contact </strong>
          		  			<span><?= $api_response->CONTACT ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>City </strong>
          		  			<span><?= $api_response->CITY ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>District </strong>
          		  			<span><?= $api_response->DISTRICT ?></span>
          		  		</li>
          		  		<li>
          		  			<strong>State </strong>
          		  			<span><?= $api_response->STATE ?></span>
          		  		</li>
          		  </ul>	
          </div>
        <div class="col-md-4">
              <div class="form-group col-md-12">
                  <select name="acct_type" class="form-control1">
                    <option value="">--Account Type--</option>
                    <option value="CA">Current Account</option>
                    <option value="SA">Savings Account</option>
                    <option value="RD">Recurring Deposit</option>
                    <option value="FD">Fixed Deposit</option>
                  </select>
              </div>
              <div class="form-group col-md-12">
                  <input type="text" name="acct_no" class="form-control1" placeholder="Account number">
              </div>
              <div class="form-group col-md-12">
                  <input type="text" name="acct_name" class="form-control1" placeholder="Account name">
              </div>
              <div class="form-group col-md-12">
                  <input type="text" name="acct_holder_name" class="form-control1" placeholder="Account holder name">
              </div>	
            <input type="hidden" name="acct_ifc" value="<?= $this->input->post('acct_ifc') ?>">
            <input type="hidden" name="bank" value="<?= $api_response->BANK ?>">
            <input type="hidden" name="branch" value="<?= $api_response->BRANCH ?>">
            <input type="hidden" name="address" value="<?= $api_response->ADDRESS ?>">
            <input type="hidden" name="contact" value="<?= $api_response->CONTACT ?>">
            <input type="hidden" name="city" value="<?= $api_response->CITY ?>">
            <input type="hidden" name="district" value="<?= $api_response->DISTRICT ?>">
            <input type="hidden" name="state" value="<?= $api_response->STATE ?>">

       </div>
    </div> 

    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Add <i class="fa fa-arrow-up"></i></button>
	</div>
   </form>
</div>                