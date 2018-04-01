
        <form class="form-horizontal form-style2" id="referedForm" name="referedForm">
            <fieldset>
                <div class="form-group text-center">
                    <label class="radio-inline"><input type="radio" name="type" class="contact-type" value="MN" checked="">Manual</label>
                    <label class="radio-inline"><input type="radio" name="type" class="contact-type" value="FC">From Contact</label>
                </div>
                <div class="form-group col-sm-8" id="manualContact">
                    <label class="control-label">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control1" placeholder="mobile number">
                </div>
                <div class="form-group col-sm-8" id="contactList" style="display: none;">
                    <p><label class="control-label">Mobile</label></p>
                        <select multiple="multiple" name="mobile_list[]" id="mobile_list" class="form-control1">
                            <?php foreach($contact_list as $contact): ?>    
                            <option value="<?= $contact['c_mobile'] ?>"><?= $contact['c_mobile'].' - '.$contact['cf_name'].' '.$contact['cl_name'].'' ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>
            </fieldset><br><br><br><br><br> 

            <div class="row text-center">
                <button class="btn btn-success ce5" type="submit" id="referedBtn">Refered</button>
            </div>
        </form>
