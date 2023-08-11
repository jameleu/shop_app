<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($baked_good)) {
  redirect_to(url_for('/staff/baking/index.php'));
}
?>

<dl>
  <dt>Name</dt>
  <dd><input type="text" name="baked_good[name]" value="<?php echo h($baked_good->name); ?>" /></dd>
</dl>

<dl>
  <dt>Type</dt>
  <dd><input type="text" name="baked_good[type]" value="<?php echo h($baked_good->type); ?>" /></dd>
</dl>

<dl>
  <dt>Cuisine</dt>
  <dd><input type="text" name="baked_good[cuisine]" value="<?php echo h($baked_good->cuisine); ?>" /></dd>
</dl>

<dl>
  <dt>Season</dt>
  <dd><input type="text" name="baked_good[season]" value="<?php echo h($baked_good->season); ?>" /></dd>
</dl>

<dl>
  <dt>Price</dt>
  <dd>$ <input type="text" name="baked_good[price]" size="18" value="<?php echo h($baked_good->price); ?>" /></dd>
</dl>

<dl>
  <dt>Calories</dt>
  <dd>
    <select name="baked_good[calories]">
      <option value=""></option>
    <?php $calorie_options = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000]; ?>
    <?php foreach($calorie_options as $calorie) { ?>
      <option value="<?php echo $calorie; ?>" <?php if($baked_good->calories == $calorie) { echo 'selected'; } ?>><?php echo $calorie; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>


<dl>
  <dt>Ingredients</dt>
  <dd><textarea name="baked_good[ingredients]" rows="5" cols="50"><?php echo h($baked_good->ingredients); ?></textarea></dd>
</dl>

<dl>
  <dt>Rating</dt>
  <dd><input type="text" name="baked_good[rating]" value="<?php echo h($baked_good->rating); ?>" /></dd>
</dl>

<dl>
  <dt>Meal</dt>
  <dd>
    <select name="baked_good[meal]">
      <option value=""></option>
    <?php foreach(BakedGood::MEAL_TYPES as $meal_id => $meal_name) { ?>
      <option value="<?php echo $meal_id; ?>" <?php if($baked_good->meal == $meal_id) { echo 'selected'; } ?>><?php echo $meal_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Description</dt>
  <dd><textarea name="baked_good[description]" rows="5" cols="50"><?php echo h($baked_good->description); ?></textarea></dd>
</dl>
