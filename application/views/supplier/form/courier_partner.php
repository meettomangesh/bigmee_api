<form class="form-style2" id="courierPartnerForm">
    <div class="row">
        <div class="col-md-6 form-group">
            <input class="form-control1" type="text" name="service_name" value="<?= $courier_partner->service_name ?>" placeholder="Courier service name">
        </div>
        <div class="col-md-6 form-group">
            <input class="form-control1" type="text" name="owner_name" value="<?= $courier_partner->name ?>" placeholder="Owner name">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <input class="form-control1" type="email" name="email" value="<?= $courier_partner->email ?>" placeholder="Email id">
        </div>
        <div class="col-md-6 form-group">
            <input class="form-control1" type="tel" name="mobile" value="<?= $courier_partner->mobile ?>" placeholder="Mobile number">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <input class="form-control1" type="tel" name="contact_no" value="<?= $courier_partner->contact_no ?>" placeholder="Contact number (landline)">
        </div>
        <div class="col-md-6 form-group">
            <input class="form-control1" type="tel" name="website" value="<?= $courier_partner->website ?>" placeholder="Website url">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <input class="form-control1" type="text" name="city" value="<?= $courier_partner->city ?>" placeholder="City name">
        </div>
        <div class="col-md-6 form-group">
            <textarea class="form-control1" name="address" placeholder="Address"><?= $courier_partner->address ?></textarea>
        </div>
    </div>

    <div class="buttons col-md-12 text-center">
        <?php $buttonValue = ($this->input->get('id')) ? 'Update': 'Add';?>
        <button class="btn btn-success" type="submit"><?= $buttonValue ?></button>
    </div>
</form>
