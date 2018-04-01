<div class="box">
  <div class="box-content">
	<form id="binaryLevelForm" class="form-style1">
	  <div class="row-fluid">
		  <div class="span6">
		  	<div class="row-fluid">
		     <div class="span10">
		       <label class="control-label">Level</label>
		       <select name="binary_level" id="binary_level">
		       <?php for($i=1; $i<=12; $i++): ?>
		       	<option><?= $i ?></option>
		       <?php endfor; ?>
		       </select>
		     </div>
		    </div>
		   <div class="row-fluid">
		     <div class="span10">
		       <label class="control-label">Joining Amount</label>
		       <input type="text" name="joining_amt" id="joining_amt">
		     </div>
		   </div>
		   <div class="row-fluid">
		     <div class="span10">
		       <label class="control-label">Binary Amount</label>
		       <input type="text" name="binary_amt" id="binary_amt">
		     </div>
		   	
		   </div>
		    <div class="row-fluid text-center">
		    	<button type="submit" class="btn btn-primary">Add</button>
		    </div>
		   </div> 
		  <div class="span6">
		    <table class="table table-striped table-bordered">
			    <thead>
				    <th>Level</th>
				    <th>Joining</th>
				    <th>Binary</th>
			    </thead> 
			    <tbody>
			  		<?php foreach($binary_level as $level): ?>
			  			<tr>
			  				<td><?= $level['binary_level'] ?></td>
			  				<td><?= $level['joining_amount'] ?></td>
			  				<td><?= $level['binary_amount'] ?></td>	
			  				<td><a class="btn btn-danger btn-xs remove-binary-level" href="javascript: void(0)" data-value="<?= $level['id'] ?>"><i class="halflings-icon white trash"></i>  </a></td>		  				
			  			</tr>
			  		<?php endforeach; ?>
			  	</tbody>	
		  	</table>
		  </div>

		</div>    
	  </form>
	</div>
</div>
