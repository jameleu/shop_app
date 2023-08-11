<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/baking/index.php'));
}
$id = $_GET['id'];
$good = BakedGood::find_by_id($id);
if($good == false) {
  redirect_to(url_for('/staff/baking/index.php'));
}

if(is_post_request()) {

  // Delete baked good
  $result = $good->delete();
  $session->message('The baked good was deleted successfully.');
  redirect_to(url_for('/staff/baking/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete baked good'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/baking/index.php'); ?>">&laquo; Back to List</a>

  <div class="baked_good_delete">
    <h1>Delete baked good</h1>
    <p>Are you sure you want to delete this baked good?</p>
    <p class="item"><?php echo h($good->name()); ?></p>

    <form action="<?php echo url_for('/staff/baking/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete baked good" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
