<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="sequence-theme">
	<div id="sequence">

		<img class="sequence-prev" src="<?php print base_path(); ?>sites/all/themes/druplex/img/assets/bt-prev.png" alt="Previous Frame" />
		<img class="sequence-next" src="<?php print base_path(); ?>sites/all/themes/druplex/img/assets/bt-next.png" alt="Next Frame" />

		<ul class="sequence-canvas">
      <?php foreach ($rows as $id => $row): ?>
        <li>
          <?php print $row; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    
  </div>
</div>