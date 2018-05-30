<?php 
    $title = "Reservations";
    
    include '../templates/title.php';
?>
<table class="ui celled table">
  <thead>
    <tr>
    <th>Customer</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Room Id</th>
    <th>Paid</th>
    <th>Actions</th>
  </tr></thead>
  <tbody>
  <?php 
    foreach ($reservations as $reservation) { 
  ?>
    <tr>
      <td><?php echo($reservation->customer_id) ?></td>
      <td><?php echo($reservation->start_date) ?></td>
      <td><?php echo($reservation->finish_date) ?></td>
      <td><?php echo($reservation->room_id) ?></td>
      <td>
        <?php if ($reservation->paid) { ?>
          <i class="thumbs up icon"></i>
        <?php } else { ?>
          <i class="thumbs down icon"></i>
          <?php } ?>
      </td>
      <td>
      <div class="ui fluid vertical labeled icon buttons">
      <a href="./checkIn?id=<?php echo($reservation->customer_id) ?>"
        <button class="ui button">
          <i class="check icon"></i>
          Check In
        </button>
        </a>
        <a href="./deleteReservation?id=<?php echo($reservation->customer_id) ?>"
        <button class="ui button">
          <i class="x icon"></i>
          Cancel
        </button>
        </a>
      </div>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
