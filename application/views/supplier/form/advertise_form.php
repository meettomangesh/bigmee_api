
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4>Add product to Advertisement list</h4>
        </div>

        <div class="panel-body">
            You can add your products in company\'s advertisement list, this is special features to highlight your products on site homepage, this service is chargeable for you as per your plan 
            <b><?= $plan_data->plan_name ?></b>, and <b><?= $plan_data->adv_prod_charge?> INR</b> amount will be debit from your account, You can add maximum 
            <b><?= $plan_data->adv_prod_limit ?> products</b> in top list as per your plan if you want to add more product you can change your plan
            <hr>

            <div class="from-group text-center">
                <button type="submit" name="addToAdvList" class="btn btn-success" id="addToAdvList">Add</button>
            </div>
        </div>
    </div>
