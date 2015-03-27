
<?php
//print_r($rows);
 foreach ($rows as $id => $row): ?>
  
    <?php //print_r($row); 
	
	if($id !=2){
	?>
	<div class="uitgelicht_out_img sidebar-shadow">
	<div class="pd5"><span class="upper"><?php print($row['created']);?> | </span><span class="upper"><?php print($row['type']);?> | </span><span class="upper"><?php print($row['name']);?></span></div>
	<div class="pd5a"><span class="textspan"><?php print($row['title']);?></span></div>
	</div>
	<?php }else {?>
	<div class="uitgelicht_img sidebar-shadow">
            <div class="pd6"><div><span class="upper"><?php print($row['created']);?> | </span><span class="upper"><?php print($row['type']);?> | </span><span class="upper"><?php print($row['name']);?></span></div> 
            <div class="pd6a"><span class="textspan"><?php print($row['title']);?></span></div>
            </div>
        <div class="pd6-img"><?php print($row['field_image_1']);?></div>
        </div>
	<?php }?>
<?php endforeach; ?>



