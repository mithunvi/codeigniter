<?php echo validation_errors(); ?>

<?php echo form_open('user/store'); ?>

	Name:<input type="text" name="name" value="<?php echo set_value('name'); ?>"><br>
	Email:<input type="email" name="email" value="<?php echo set_value('email'); ?>"><br>
	 
	<input type="submit" value="Hit me"><br>
</form>