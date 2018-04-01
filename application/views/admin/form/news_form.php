<?php if(isset($news_data)): ?>
	<div class="box">
	<div class="box-content">
		<form id="createNewsForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">News Title</label>
					<input type="text" name="news_title" id="news_title" value="<?= $news_data->news_title ?>">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<label class="control-label">News Content</label>
					<textarea type="text" name="news_content" id="news_content"><?= $news_data->news_content ?></textarea>
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-success">Update</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>
<?php else: ?>
<div class="box">
	<div class="box-content">
		<form id="createNewsForm" class="form-style1">
			<div class="row-fluid">
				<div class="span6">
					<label class="control-label">News Title</label>
					<input type="text" name="news_title" id="news_title">
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<label class="control-label">News Content</label>
					<textarea type="text" name="news_content" id="news_content"></textarea>
				</div>
			</div>
			<div class="row-fluid text-right">
				<button type="submit" class="btn btn-primary">Create</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</form>
	</div>
</div>
<?php endif; ?>