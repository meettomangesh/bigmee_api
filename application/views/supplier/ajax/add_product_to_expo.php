<?php if(count($current_expo) > 0): ?>  
    <div class="sp-expo-info panel panel-success">
        <div class="panel-heading">
            <h4><?= $current_expo->expo_title ?></h4>
        </div>

        <form id="addProductToExpoForm" class="form-style1" name="addProductToExpoForm">
            <div class="panel-body">
                <ul class="clearfix">
                    <li><strong>Start From:</strong><span><?= formateDate($current_expo->expstart_date, 1) ?></span></li>

                    <li><strong>End on:</strong><span><?= formateDate($current_expo->expend_date, 1) ?></span></li>

                    <li><strong>Cost:</strong><span><?= $current_expo->expo_charge ?> INR /- per product</span></li>
                </ul>

                <div class="breadcrumb">
                    <h5>About Expo</h5>

                    <p><?= $current_expo->about_expo ?></p>
                </div>

                <div class="form-group col-md-6">
                    <p>Product price:</p><strong><?= $product_data->prod_price ?> /- <?= showData($product_data->price_unit) ?></strong>
                </div>

                <div class="form-group col-md-6">
                    <label>Expo price</label><input type="text" class="form-control1" name="expo_price" value="<?= $product_data->prod_price ?>" placeholder="enter your expo price..." data-rule-required="true">
                    <input type="hidden" name="prod_id" value="<?= $product_data->prod_id ?>">
                    <input type="hidden" name="expo_id" value="<?= $current_expo->expo_id ?>">
                    <input type="hidden" name="expo_charge" value="<?= $current_expo->expo_charge?>">
                </div>
            </div>

            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-success" name="AddToExpo" id="AddToExpo">Add</button>
            </div>
        </form>
    </div>
<?php else: ?>
    <div class="sp-expo-info panel panel-warning">
        <div class="panel-heading">
            <h4>No expo arranged</h4>
        </div>
        <div class="panel-body">
            <p class="text-danger">Note: Dear user your category expo is not arranged or expo might be expired, for more details contact our customer support.</p>
        </div>
    </div>    

<?php endif; ?>