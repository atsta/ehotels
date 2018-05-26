<div class="ui container">
<span class="ui huge  header">
Add Hotel
</span>
<div class="ui divider"></div>
</div>

<form class="ui large form" method="post" action="/new_hotel">
    <div class="fields">
        <div class="field">
        <label>Email Address</label>
        <input type="text" name="email" placeholder="hotel@example.com">
    </div>
    <div class="field">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="+XX XXXXXXXXX">
    </div>
    <div class="field">
            <label>Stars</label>
            <input type="number" name="stars" placeholder="XX">
        </div>
    </div>
    <div class="field">
      <label>Hotel Group</label>
        <select name="hotel_group_id" class="ui search dropdown">
            <option value="">Select Hotel Group</option>
            <?php foreach($values["hotel_groups"] as $hotel_group) { ?>
                <option value="<?php echo($hotel_group->id) ?>"><?php echo($hotel_group->email) ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="field">
      <label>Manager</label>
        <select name="employee_id" class="ui search dropdown">
            <option value="">Select Managers</option>
            <?php foreach($values["employees"] as $employee) { ?>
                <option value="<?php echo($employee->irs_number) ?>"><?php echo($employee->first_name." ".$employee->last_name) ?> </option>
            <?php } ?>
        </select>
    </div>
    <button class="ui button" type="submit">Create</button>
</form>