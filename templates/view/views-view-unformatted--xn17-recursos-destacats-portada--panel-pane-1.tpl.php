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
$view = views_get_current_view();
print "<div class='titol-regio'>" . check_plain($view->get_title()) . "</div><div class='espaiblanc'></div>";
$itRow = 1;
foreach ($rows as $id => $row):  ?>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pdng_mdl">
    <?php print $row; ?>
  </div>
<?php
$itRow++;
endforeach; ?>
