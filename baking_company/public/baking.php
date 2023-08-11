<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/melon_pan.jpg') ?>" />
      <h2>Baked Goods Selection</h2>
      <p>Choose the sweets you love.</p>
      <p>We will deliver it to your door or serve it at our bakery! Either way, you'll get it fresh!</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Rating</th>
        <th>Price</th>
        <th>Description</th>
        <th>Calories</th>
        <th>Ingredients</th>
        <th>Cuisine</th>
        <th>Meal It Can Be Served With</th>
        <th>Season It Is Perfect For</th>

        <th>&nbsp;</th>
      </tr>

<?php

$goods = BakedGood::find_all();

?>
      <?php foreach($goods as $good) { ?>
      <tr>
        <td><?php echo h($good->name); ?></td>
        <td><?php echo h($good->type); ?></td>
        <td><?php echo h(money_format('$%i', $good->price)); ?></td>
        <td><?php echo h($good->rating); ?></td>
        <td><a href="detail.php?id=<?php echo $good->id; ?>">View</a></td>
      </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
