<form action="plus" method="post">
	<?php echo method_field('POST'); ?>
     	<?php echo csrf_field(); ?>
	<input name='a' type='text'>
	+
	<input name='b' type='text'>
	<input type='submit' value="submit">
</form>