<?php
$categories = get_categories();
$catArr = array();
$catId = array();
foreach($categories as $category){
	array_push($catArr,$category->name);
	array_push($catId,$category->term_id);
}
for ($i=0; $i <count($catArr) ; $i++) {
	$category_link = get_category_link($catId[$i]);
	?>
	<div class="col-md-6">
			<a href="<?php echo esc_url($category_link);?>"><?php echo $catArr[$i]; ?></a>
	</div>
<?php }	?>
