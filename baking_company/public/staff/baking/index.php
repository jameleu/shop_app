<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1; 
$per_page = 5;
$total_count = BakedGood::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

$sql = "SELECT * FROM baked_goods ";  
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$baked_goods = BakedGood::find_by_sql($sql);

?>
<?php $page_title = 'Baked Goods'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="baked_goods listing">
    <h1>Baked Goods</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/baking/new.php'); ?>">Add Baked Good</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Cuisine</th>
        <th>Season</th>
        <th>Price</th>
        <th>Calories</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($baked_goods as $baked_good) { ?>
        <tr>
          <td><?php echo h($baked_good->id); ?></td>
          <td><?php echo h($baked_good->name); ?></td>
          <td><?php echo h($baked_good->type); ?></td>
          <td><?php echo h($baked_good->cuisine); ?></td>
          <td><?php echo h($baked_good->season); ?></td>
          <td><?php echo h($baked_good->price); ?></td>
          <td><?php echo h($baked_good->calories); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/baking/show.php?id=' . h(u($baked_good->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/baking/edit.php?id=' . h(u($baked_good->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/baking/delete.php?id=' . h(u($baked_good->id))); ?>">Delete</a></td>
        </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/staff/baking/index.php');
echo $pagination->page_links($url); 
?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
