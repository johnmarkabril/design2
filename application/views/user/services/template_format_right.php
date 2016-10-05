
<?php 
	foreach($services_content_db as $cont) { 
?>
		<hr/>

		<div><span style="font-weight: bold;">Client : </span><?php echo $cont->CLIENT; ?></div>
		<div><span style="font-weight: bold;">Date : </span><?php echo $cont->DATE; ?></div>
		<div><span style="font-weight: bold;">Information : </span><?php echo $cont->INFO; ?></div>

		<hr style="margin-bottom: 0px;"/>

		<?php 
			$descript = explode('|', $cont->DESCRIPTION);
			foreach ($descript as $x) {
		?>
			<div class="pad-top-fiften"><?php echo $x;?></div>
		<?php
			}
		?>
<?php 
	}
?>