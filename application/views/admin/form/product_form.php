<div class="box">
    <div class="box-content">
        <form id="editProductForm" class="form-style1">
            <input type="hidden" name="p_short_desc" value="<?= $prod_data->prod_short_desc ?>">
            <input type="hidden" name="prod_type" value="<?= $prod_data->prod_type ?>">
            
            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Name</label>
                    <input type="text" name="p_title" id="p_title" class="input-xlarge" value="<?= $prod_data->prod_title ?>"></div>
                <div class="span6">
                    <label class="control-label">Group</label>
                    <select name="bcat_name" id="bcat_name">
                        <option value="">--Select--</option>
                        <?php foreach ($sp_services as $service): ?>
                            <option <?php if ($prod_data->bcat_id == $service['bcat_id']) echo "selected"; ?> value="<?= $service['bcat_id'] ?>"><?= $service['bcat_name'] ?></option>	
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <strong>Discount</strong>
                    <label class="radio"><strong>No</strong>
                        <input type="radio" name="discount" class="disc" value="false" id="noCheck" <?php if ($prod_data->prod_discount == 0) echo "checked"; ?>>
                    </label>
                    <label class="radio"><strong>Yes</strong>
                        <input type="radio" name="discount" class="disc" value="true" id="yesCheck" <?php if ($prod_data->prod_discount > 0) echo "checked"; ?>>
                    </label>
                </div>
                <div class="span6" id="discount-div">
                    <label class="control-label">Enter Discount</label>
                    <input type="text" name="p_discount" id="p_discount" class="input-xlarge" autocomplete="off" value="<?= $prod_data->prod_discount ?>">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Price</label>
                    <input type="text" name="p_price" id="p_price" class="input-xlarge" value="<?= $prod_data->prod_price ?>">
                </div>
                <div class="span6">
                    <label class="control-label">Unit</label>
                    <select class="input-xlarge <?php if($prod_data->price_unit == 0): echo"disabled-box"; endif;?>" name="p_unit" id="p_unit">
                        <option value="">--Select--</option>
                        <optgroup label="Grocery Stores">
                            <option value="piece" <?php  if($prod_data->price_unit == 'piece') echo "selected"; ?>>Piece</option>
                            <option value="packet" <?php  if($prod_data->price_unit == 'packet') echo "selected"; ?>>Packet</option>
                            <option value="kg" <?php  if($prod_data->price_unit == 'kg') echo "selected"; ?>>Kg</option>
                        </optgroup>
                        <optgroup label="Garment Stores">
                            <option value="item" <?php  if($prod_data->price_unit == 'item') echo "selected"; ?>>Item</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3">
                    <label class="control-label">Approve</label>
                    <select name="p_approval" id="p_approval" class="input-medium">
                        <option value="">--Select--</option>
                        <option <?php if ($prod_data->prod_approve == 1) echo "selected"; ?> value="1">Approve</option>
                        <option <?php if ($prod_data->prod_approve == 0) echo "selected"; ?> value="0">Reject</option>
                    </select>
                </div>
                <div class="span3">
                    <label class="control-label">Stock</label>
                    <select name="stock_status" id="stock_status" class="input-medium">
                        <option value="">--Select--</option>
                        <option <?php if ($prod_data->stock_status == 1) echo "selected"; ?> value="1">In Stock</option>
                        <option <?php if ($prod_data->stock_status == 0) echo "selected"; ?> value="0">Out Of Stock</option>
                    </select>
                </div>
                <div class="span6">
                    <label class="control-label">Image</label>
                    <input type="file" name="pimg" id="pimg">
                    <div class="img-preview">
                        <img src="<?= base_url('dist/img/products/med/' . $prod_data->prod_img) ?>" alt="<?= $prod_data->prod_title ?>">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <label class="control-label">Descreption</label>
                        <textarea name="p_desc" id="p_desc"><?= $prod_data->prod_desc ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row-fluid text-right">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn">Reset</button>
            </div>
        </form>
    </div>
</div>
