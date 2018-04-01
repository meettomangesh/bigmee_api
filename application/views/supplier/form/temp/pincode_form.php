<div class="container">
    <form class="form-style1" id="pincodeForm" name="pincodeForm" method="post">
        <div class="row">
            <div class="col-md-6 form-group">
                <label class="control-label">State</label>
                <select name="state" id="state" class="form-control">
                    <option value="">--State--</option>
                    <?php foreach($state_list as $state):?>
                    <option value="<?= $state['state_id'] ?>"><?= $state['state_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">District</label>
                <select name="dist" id="dist"  class="form-control">
                    <option value="">--District--</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Taluka</label>
                <select name="taluka" id="tal" class="form-control">
                    <option value="">--Taluka--</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label>Pincode</label>
                <textarea rows="10" name="pincode"  id="pincode" class="form-control" placeholder="eg: 414001,414002..."></textarea>
            </div>  
        </div>    
        <div class="row">
        <div class="buttons col-md-12 text-center">
            <button class="btn btn-success" type="submit">Add</button>
        </div>
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