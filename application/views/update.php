<form action="/user/edit/<?php echo $id; ?>" method='post'>
	Name:<input type="text" name="name" value="<?php echo $user_data->name; ?>"><br>
	Email:<input type="email" name="email" value="<?php echo $user_data->email; ?>"><br>
	 
	<input type="submit" value="Hit me"><br>
</form>