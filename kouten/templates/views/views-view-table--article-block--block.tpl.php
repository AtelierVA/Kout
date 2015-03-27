<div>
	<div class="home_discuss_body">
	<?php //print("<pre>"); print_r($rows); ?>
	<?php foreach($rows as $row) { ?>
			<div>
				<div class="distitle"><?php print $row['nothing_1'] ?></div>
				<div class="distitle_aut"> <?php print $row['created'] ?> - <?php print $row['type'] ?> </div>
			</div>
	<?php } ?>
			<!--<div>
				<div class="distitle">Lorem Ipsum is simply dummy text</div>
				<div class="distitle_aut">OPINIE - 27 Octobar 2014</div>
			</div>
			<div>
				<div class="distitle">Lorem Ipsum is simply dummy text</div>
				<div class="distitle_aut">OPINIE - 27 Octobar 2014</div>
			</div>-->
	</div>
	<?php foreach($rows as $val) { ?>
	<div class="home_discuss_img"><?php print $val['field_image']; ?></div>
	<?php break; } ?>
	<div class="clear"></div>
</div>