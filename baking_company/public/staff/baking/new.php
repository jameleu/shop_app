<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['baked good'];
  $good = new Baked Good($args);
  $result = $good->save();

  if($result === true) {
    $new_id = $good->id;
    $session->message('The baked good was created successfully.');
    redirect_to(url_for('/staff/baking/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $good = new BakedGood;
}

?>

<?php $page_title = 'Create Baked Good'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/baking/index.php'); ?>">&laquo; Back to List</a>

  <div class="baked good new">
    <h1>Create Baked Good</h1>

    <?php echo display_errors($good->errors); ?>

    <form action="<?php echo url_for('/staff/baking/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create Baked Good" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
