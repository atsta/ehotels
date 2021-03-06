<?php 
    $title = "Available Hotel Rooms";
    $disableButton = True;
    
    include '../templates/title.php';
?>
<form class="ui large form" method="get" action="/available">
<div class="fields">
        <div class="field">
            <label>Start Date</label>
            <input type="text" name="start_date" value=<?= $start_date ?>>
        </div>
        <div class="field">
            <label>Finish Date</label>
            <input type="text" name="finish_date" value=<?= $finish_date ?>>
        </div>
        <div class="field">
            <label>Starting Price</label>
            <input type="number" name="price_start" value=<?= $price_start ?>>
        </div>
        <div class="field">
            <label>Upper Price</label>
            <input type="number" name="price_upper" value=<?= $price_upper ?>>
        </div>
        <div class="field">
            <label>Capacity</label>
            <input type="number" name="capacity" value=<?= $capacity ?>>
        </div>
        <div class="field">
            <label>Hotel Stars</label>
            <input type="number" name="stars" value=<?= $stars ?>>
        </div>
    </div>
    <div class="field">
          <label>Cities</label>
          <select name="selected_city" class="ui search dropdown">
            <option value="">Select City</option>
            <?php foreach($cities as $city) { 
                $selected = "";
                if ($city === $selected_city) $selected = "selected"
            ?>
                <option value="<?= $city ?>" <?php echo($selected) ?>><?php echo($city) ?></option>
            <?php } ?>
          </select>
      </div>
      <div class="field">
      <label>Hotel Group</label>
        <select name="selected_hotel_group" class="ui search dropdown">
            <option value="">Select Hotel Group</option>
            <?php foreach($hotel_groups as $hotel_group) { 
                $selected = "";
                if ($hotel_group->id === $selected_hotel_group) $selected = "selected"
            ?>
                <option value="<?php echo($hotel_group->id) ?>" <?php echo($selected) ?>><?php echo($hotel_group->email) ?></option>
            <?php } ?>
        </select>
    </div>
    <button class="ui left button" type="submit" name="action" value="default"><i class="search icon"></i>Find</button>
    <button class="ui left button" type="submit" name="action" value="groupby"><i class="search icon"></i>Grouped By Location</button>
</form>
<table class="ui celled table">
  <thead>
    <tr>
    <th>Room id</th>
    <th>Price</th>
    <th>Capacity</th>
    <th>View</th>
    <th>Amenities</th>
    <th>Expendable</th>
    <th>Hotel</th>
    <th>Actions</th>
  </tr></thead>
  <tbody>
  <?php 
    foreach ($values["rooms"] as $room) { 
  ?>
    <tr>
      <td><?php echo($room->id) ?></td>
      <td><?php echo($room->price) ?></td>
      <td><?php echo($room->capacity) ?></td>
      <td><?php echo($room->view) ?></td>
      <td><?php echo($room->amenities) ?></td>
      <td><?php echo($room->expendable) ?></td>
      <td><?php echo($room->hotel()->email) ?></td>
      <td>
      <div class="ui fluid vertical labeled icon buttons">
        <a href="./reserveRoom?id=<?php echo($room->id) ?>&start_date=<?= $start_date?>&finish_date=<?= $finish_date?>"
        <button class="ui button">
          <i class="play icon"></i>
          Reserve
        </button>
        </a>
      </div>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
