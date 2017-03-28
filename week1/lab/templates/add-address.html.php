<!-- put your HTML here -->
<form action="#" method="POST">
<div class="form-group">
	<div class="row">
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>"/>
		</div>
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>"/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="Address" name="addressline1" value="<?php echo $addressline1; ?>" />
		</div>
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $city; ?>" />
		</div>
		<div class="col-md-4">
			<select name="state">
            <?php foreach ($states as $key => $value): ?> 
              	<option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
          </select>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<input type="zip" class="form-control" placeholder="Zipcode" name="zip" value="<?php echo $zip; ?>" />
		</div>
		<div class="col-md-4">
			<input type="date" name="birthday" value="<?php echo $birthday; ?>" />
		</div>
	</div>
</div>
	<input type="submit" class="btn btn-default" name="submit" />
</form>
<!-- put your HTML here -->