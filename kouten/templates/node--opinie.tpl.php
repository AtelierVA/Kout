<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
	<?php endif; ?>
  <div class="art_image"><?php 
  print render($content['field_image']);
  ?>
  </div>
  <div class="allcontent">
  <div class="art_title"><div class="head_title_2"><?php print $title; ?></div></h1>
  <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>
  </div>
  <?php 
	if($content['pervious_node']) 
	$pervious_node = "node/" . $content['pervious_node'];
	else
	$pervious_node = "";
	if($content['next_node']) 
	$next_node = "node/" . $content['next_node'];
	else
	$next_node = "";
	?>
  <?php
  //print("<pre>");
  	//print_r($content['field_image']);
	
	//exit;
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>
	<!--<a class="kout_link" href="http://kouten.nl/group/node/21/subscribe">vorige artikel</a>
	<a class="kout_link" href="http://kouten.nl/group/node/21/subscribe">terug naar de overzicht </a>
	<a class="kout_link" href="http://kouten.nl/group/node/21/subscribe">volgende artikel</a>-->
	<div class="backlinks">
	
	<?php if($pervious_node != '') print l( "vorige artikel", $pervious_node, array('attributes' => array('class' => 'kout_link'),'query' => array('d_page' => $_GET['d_page'])));?>
	<?php print l( "terug naar de overzicht pagina", $_GET['d_page'], array('attributes' => array('class' => 'kout_link')));?>
	<?php if($next_node != '') print l("volgende artikel", $next_node, array('attributes' => array('class' => 'kout_link'),'query' => array('d_page' => $_GET['d_page'])));?>
	</div>
	</div>
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
