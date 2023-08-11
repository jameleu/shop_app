<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/baked_good/index.php'));
}
$id = $_GET['id'];
$good = BakedGood::find_by_id($id);
if($good == false) {
  redirect_to(url_for('/staff/baked_good/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['baked good'];
  $good->merge_attributes($args);
  $result = $good->save();

  if($result === true) {
    $session->message('The baked good was updated successfully.');
    redirect_to(url_for('/staff/baked_good/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit baked good'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/baked_good/index.php'); ?>">&laquo; Back to List</a>

  <div class="baked good edit">
    <h1>Edit baked good</h1>

    <?php echo display_errors($good->errors); ?>

    <form action="<?php echo url_for('/staff/baked_good/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit baked good" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
