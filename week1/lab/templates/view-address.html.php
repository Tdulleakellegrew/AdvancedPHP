<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<h1>Addresses</h1>
<table class="table table-striped">
<tr><th>Name</th><th>Email</th><th>Street</th><th>City</th><th>State</th><th>Zipcode</th><th>Birthday</th></tr>
<?php foreach( $addresses as $row ) : ?>
    <tr><th><?php echo $row['fullname']; ?></th><th><?php echo $row['email']; ?></th><th><?php echo $row['addressline1']; ?></th><th><?php echo $row['city']; ?></th><th><?php echo $row['state']; ?></th><th><?php echo $row['zip']; ?></th><th><?php echo $row['birthday']; ?></th></tr>
<?php endforeach; ?>
</table>
<?php endif; ?>