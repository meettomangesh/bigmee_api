
<div class="container">
    <form class="form-style2" id="promotionForm">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group col-md-12">
                    <input type="text" name="start_date" id="start_date" class="form-control1" placeholder="Start date" autocomplete="off">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" name="end_date" id="end_date" class="form-control1" placeholder="End date" autocomplete="off">
                </div>
            </div>
            <div class="col-md-6">
                <ul class="data-list">
                    <li>
                        <strong>Charge</strong>
                        <span><?= $plan->product_charge ?> / day</span>
                    </li>
                    <div id="promotionProductTotalCharge">
                        <li>
                            <strong>Days</strong>
                            <span id="promotion-product-total-days"></span>
                        </li>
                        <li>
                            <strong>Total Charges</strong>
                            <span id="promotion-product-total-charge" data-product-charge="<?= $plan->product_charge ?>"></span>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">Add <i class="fa fa-arrow-plus"></i></button>
            </div>
        </div>
    </form>
</div>                