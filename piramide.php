<style>
	.block {
		background-color: #000;
		width: 10px;
		height: 10px;
		float: left;
	}
</style>
<?php
$i = 0;
while ($i < 10) {
	$i++;
	$o = 0;
	while ($o < $i) {
		$o++;
?>
<div class="block"></div>

	<?php } echo '<br />'; } ?>