
    <div class="box box-content">
        <form id="broadcastMsgForm" class="form-style1">
            <div class="row-fluid">
                <div class="span6">
                    <label class="control-label">Type</label>
                    <select name="type" id="type">
                        <option value="">--Select-- </option>
                        <option value="CM">Company Users </option>
                        <option value="SP">Supplier Users </option>
                        <option value="MN">Enter Number</option>
                    </select>
                </div>
            </div>
         
         <form id="broadcastFilterForm">   
          <div class="row-fluid" id="supplier-user-filter">
            <div class="row-fluid">
                 <div class="span3">
                    <label class="control-label">State</label>
                    <select name="state" id="state">
                        <option value="">--State--</option>
                        <?php foreach($stateList as $state): ?>
                         <option value="<?= $state['state_id'] ?>"><?=  $state['state_name'] ?></option>
                        <?php  endforeach; ?>
                    </select>
                 </div>
                 <div class="span3">
                    <label class="control-label">District</label>
                    <select name="dist" id="dist">
                      <option value="">--District--</option>
                    </select>
                 </div>
                 <div class="span3">
                    <label class="control-label">Taluka</label>
                    <select name="tal" id="tal">
                     <option value="">--Taluka--</option>
                    </select> 
                 </div>
                <div class="span3">
                    <label class="control-label">Contact</label>
                    <select name="contact_list" id="contact_list">
                     <option value="">--Select--</option>
                     <option value="Y">Yes</option>
                     <option value="N">No</option>
                    </select> 
                 </div>
            </div>
         </div>  
         
         <div class="row-fluid" id="company-user-filter">
                 <div class="span3">
                    <label class="control-label">Role</label>
                    <select name="role" id="role">
                        <option value="">--Select--</option>
                        <option value="MA">Master Admin</option>
                        <option value="AD">Admin</option>
                        <option value="SU">Support</option>
                        <option value="SL">Sales</option>
                        <option value="AT">Account</option>
                        <option value="SBD">State Business Developer</option>
                        <option value="DBD">District Business Developer</option>
                        <option value="TBD">Taluka Business Developer</option>
                    </select>
                 </div>
                <div class="span3">
                    <label class="control-label">Contact</label>
                    <select name="contact_list" id="contact_list">
                     <option value="">--Select--</option>
                     <option value="Y">Yes</option>
                     <option value="N">No</option>
                    </select> 
                 </div>
         </div> 
         

         <div class="row-fluid" id="manual-number">
                <div class="span3">
                    <label class="control-label">Contact</label>
                    <input type="text" name="mobile" id="mobile">
                 </div>
         </div> 
      </form> <!-- filter form end --> 
         
            <div class="row-fluid">
                <div class="span8">
                    <label class="control-label">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
            </div>

            <div class="row-fluid text-right">
                <button type="submit" class="btn btn-primary">Broadcast</button>
            </div>
        </form>
    </div>

<script>
    // for selection of state, district and taluka
    $('#state').change(function(){
        if($('#state').val()!="--State--"){
            $('#dist').find('option').remove().end().append("<option value=''>Please Wait...</option>");
            var state = $('#state').val();
                    $.ajax({
                                type: 'POST',
                                url: baseurl+'base/load-district',
                                data: 'state='+state,
                                success: function(data, textStatus, jqXHR) {
                                   $('#tal').find('option').remove().end().append("<option value=''>--Taluka--</option>");
                                   $('#dist').find('option').remove().end().append("<option value=''>--District--</option>"+data);
                                   },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    alert("Error :" + textStatus);
                                }
                            });
                     }else {
                        $('#dist').find('option').remove().end().append("<option value=''>--District--</option>");
                        $('#tal').find('option').remove().end().append("<option value=''>--Taluka--</option>");
                     }
                     
    });
    
    $('#dist').change(function(){
        if($('#state').val()!="--State--" && $('#dist').val()!="--District--"){
            $('#tal').find('option').remove().end().append("<option value=''>Please Wait...</option>");
            var dist = $('#dist').val();
                    $.ajax({
                                type: 'POST',
                                url: baseurl+'base/load-taluka',
                                data: 'dist='+dist,
                                success: function(data, textStatus, jqXHR) {
                                   $('#tal').find('option').remove().end().append("<option value=''>--Taluka--</option>"+data);
                                   },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    alert("Error :" + textStatus);
                                }
                            });
                     }else {
                        $('#tal').find('option').remove().end().append("<option value=''>--Taluka--</option>");
                     }
                     
    });
</script>
