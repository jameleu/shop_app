<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested ID

  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('baking.php');
  }

  // Find bicycle using ID

  $good = BakedGood::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $good->name(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="baking.php">Back to Inventory</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Name</dt>
        <dd><?php echo h($good->name); ?></dd>
      </dl>
      <dl>
        <dt>Type</dt>
        <dd><?php echo h($good->type); ?></dd>
      </dl>
      <dl>
        <dt>Rating </dt>
        <dd><?php echo h($good->rating); ?></dd>
      </dl>
      <dl>
        <dt>Price</dt>        
        <dd><?php echo h(money_format('$%i', $good->price)); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($good->description); ?></dd>
      </dl>
      <dl>
        <dt>Calories</dt>
        <dd><?php echo h($good->calories); ?></dd>
      </dl>
      <dl>
        <dt>Ingredients</dt>
        <dd><?php echo h($good->ingredients); ?></dd>
      </dl>
      <dl>
        <dt>Cuisine</dt>
        <dd><?php echo h($good->cuisine); ?></dd>
      </dl>
      <dl>
        <dt>Meal</dt>
        <dd><?php echo h($good->meal_type()); ?></dd>
      </dl>
      <dl>
        <dt>Season</dt>
        <dd><?php echo h($good->season); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
