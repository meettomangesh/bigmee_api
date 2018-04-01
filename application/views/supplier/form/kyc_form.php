 <div class="container">
        <form class="form-style2" id="uploadkycForm">
          <div class="row">
              <div class="form-group col-md-10">
                  <input type="text" name="pan_no" class="form-control1" value="<?= $kyc_data->pan_card ?>" placeholder="Pan card number">
              </div>
          </div>
          <div class="row">
              <div class="form-group col-md-10">
                  <input type="text" name="adhaar_no" class="form-control1" value="<?= $kyc_data->adhaar_card ?>" placeholder="Adhaar card number">
             </div>
          </div>
          <div class="row">
                <div class="form-group col-md-10">
                  <input type="text" name="shopact_no"" class="form-control1" value="<?= $kyc_data->shopact_regno ?>" placeholder="Business card number">
                </div>
            </div>
           <div class="row">
              <div class="text-center">
                  <button type="submit" class="btn btn-success">Upload</button>
              </div>
           </div> 
        </form>
    </div>