
<?php if (isset($category)): ?>

<form class="form-style2" id="businessCatForm" method="post">
        <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="cat_name" id="cat_name" value="<?= $category->bcat_name ?>" placeholder="Enter name.">
            </div>
        </div>   

        <div class="buttons col-md-12 text-center">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>

<?php else: ?>

<form class="form-style2" id="businessCatForm" method="post">
        <div class="row">
            <div class="col-md-6 form-group">
                <input class="form-control1" type="text" name="cat_name" id="cat_name" placeholder="Enter name.">
            </div>
        </div>   

        <div class="buttons col-md-12 text-center">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>

<?php endif; ?>    