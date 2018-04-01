<?php
foreach($bd_area as $area){
 $acct_role = $area['acct_role'];   
}  
?>
    <div class="box box-content">
        <form id="bdAreaForm" class="form-style1">
        <input type="hidden" name="role" value="<?= $acct_role ?>">
            <div class="row-fluid">
                <?php if(in_array($acct_role, $stateArea)): ?>
                <div class="span4">
                    <label class="control-label">State</label>
                    <select name="area[]" id="area" multiple rel="chosen" class="choosen">  
                        <?php foreach($stateList as $state): ?>
                        <option value="<?= $state['state_id'] ?>" 
                        <?php  
                            foreach($bd_area as $area){
                                if($area['state_id'] == $state['state_id']){
                                echo "selected";   
                                } 
                            } 
                            ?>>
                            <?= $state['state_name'] ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                   </div> 
                    <?php endif; ?>
                    
                    
                <?php if(in_array($acct_role, $distArea)): ?>
                    <div class="span4">
                        <label class="control-label">State</label>
                        <select name="state" id="state" class="input-small">
                            <option value="">--State--</option>
                             <?php foreach($stateList as $state): ?>
                                <option value="<?= $state['state_id'] ?>"><?=  $state['state_name'] ?></option>
                             <?php  endforeach; ?>
                        </select>
                    </div>  
                   <div class="span4"> 
                    <label class="control-label">District</label>
                    <select name="area[]" id="dist" multiple rel="chosen" class="choosen">
                        <?php foreach($bd_area as $area): ?>
                            <?php if(!empty($area['dbd_area_id'])): ?>
                              <option selected value="<?= $area['dist_id'] ?>"><?= $area['dist_name'] ?></option>  
                            <?php endif; ?>  
                        <?php endforeach; ?> 
                    </select>
                   </div> 
                    <?php endif; ?>
                    
                    
                <?php if(in_array($acct_role, $talukaArea)): ?>
                    <div class="span6">
                        <label class="control-label">State</label>
                        <select name="state" id="state" class="input-large">
                            <option value="">--State--</option>
                             <?php foreach($stateList as $state): ?>
                                <option value="<?= $state['state_id'] ?>"><?=  $state['state_name'] ?></option>
                             <?php  endforeach; ?>
                        </select>
                    </div>   
                    <div class="span6"> 
                        <label class="control-label">District</label>
                        <select name="dist" id="dist" class="input-large">
                            <option value="">--District--</option>
                        </select>
                   </div>
                <div class="span6">
                    <label class="control-label">Taluka</label>
                    <select name="tal" id="tal" class="input-large"> 
                        <option>--Taluka--</option>
                    </select>
                 </div>  
                <div class="span6">
                    <label class="control-label">Taluka</label>
                    <select name="area[]" id="pincode" multiple rel="chosen" class="choosen" class="input-large"> 
                        <?php foreach($bd_area as $area): ?>
                            <?php if(!empty($area['pincode_id'])): ?>
                              <option selected value="<?= $area['pincode_id'] ?>"><?= $area['pincode'] ?></option>  
                            <?php endif; ?>  
                        <?php endforeach; ?>  
                    </select>
                 </div>    
                    <?php endif; ?>                                                            
                </div>
            <?php if(in_array($this->session->userdata('type'), $area_role)): ?>
                <div class="row-fluid text-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn">Reset</button>
                </div>
            <?php endif; ?>    
            </div>
        </form>
    </div>