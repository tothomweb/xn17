<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php
$itRow = 1;
foreach ($rows as $id => $row):  ?>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bkgd-gris">
    <?php print $row; ?>
  </div>
<?php
$itRow++;
endforeach; ?>
