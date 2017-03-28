<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<h1>Addresses</h1>
<ul>
<?php foreach( $addresses as $row ) : ?>
    <li><?php echo $row['fullname']; ?> </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>