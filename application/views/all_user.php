<table border="1px solid black">
	<tr>
		<td>Name</td>
		<td>email</td>
		<td>Password</td>
		<td>Action</td>
	</tr>

	<?php foreach ($all_user as $user) {
		?>
		<tr>
			<td><?php echo $user->name; ?></td>
			<td><?php echo $user->email ; ?></td>
			<td><?php echo $user->password ; ?></td>
			<td><a href="/user/delete/<?php echo $user->id ; ?>">Delete</a></td>
		</tr>

	<?php }?>
</table>