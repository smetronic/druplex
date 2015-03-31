<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<ul id="latest-work-images" class="thumbs">

  <?php foreach ($rows as $row_number => $columns): ?>

    <?php foreach ($columns as $column_number => $item): ?>

      <li>
        <?php print $item; ?>
      </li>

      <?php endforeach; ?>

  <?php endforeach; ?>

</ul>
