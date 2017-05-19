<form class="form" action="#" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $password; ?>"/>
			</div>
			<div class="col-md-4">
				<input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword" value="<?php echo $confirmPassword; ?>"/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="submit" value="Submit">
			</div>
		</div>
	</div>
</form>