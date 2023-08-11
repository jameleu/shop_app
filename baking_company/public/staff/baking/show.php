<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; 

$baked_good = BakedGood::find_by_id($id);

?>

<?php $page_title = 'Show Baked Good: ' . h($baked_good->name); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/baking/index.php'); ?>">&laquo; Back to List</a>

  <div class="baked_good show">

    <h1>Baked Good: <?php echo h($baked_good->name); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Name</dt>
        <dd><?php echo h($baked_good->name); ?></dd>
      </dl>
      <dl>
        <dt>Type</dt>
        <dd><?php echo h($baked_good->type); ?></dd>
      </dl>
      <dl>
        <dt>Cuisine</dt>
        <dd><?php echo h($baked_good->cuisine); ?></dd>
      </dl>
      <dl>
        <dt>Season</dt>
        <dd><?php echo h($baked_good->season); ?></dd>
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><?php echo h(money_format('$%i', $baked_good->price)); ?></dd>
      </dl>
      <dl>
        <dt>Calories</dt>
        <dd><?php echo h($baked_good->calories); ?></dd>
      </dl>
      <dl>
        <dt>Rating</dt>
        <dd><?php echo h($baked_good->rating); ?></dd>
      </dl>
      <dl>
        <dt>Meal</dt>
        <dd><?php echo h($baked_good->meal); ?></dd>
      </dl>
      <dl>
        <dt>Ingredients</dt>
        <dd><?php echo h($baked_good->ingredients); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($baked_good->description); ?></dd>
      </dl>
    </div>

  </div>

</div>
