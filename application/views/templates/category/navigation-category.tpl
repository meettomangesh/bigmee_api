{foreach $mcat_list as $main}
	<li class="single-menu colmd4">
    	<a href="{$baseurl}/pages/product-view?base_cat%5B%5D={$main.mcat_id}">{$main.mcat_name}</a>
	</li>
{/foreach}  