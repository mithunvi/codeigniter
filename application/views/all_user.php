<table border="1px solid black">
	<tr>
		<td>Name</td>
		<td>email</td>
		<td>Password</td>
	</tr>

	<?php foreach ($all_user as $user) {
		?>
		<tr>
			<td><?php echo $user->name; ?></td>
			<td><?php echo $user->email ; ?></td>
			<td><?php echo $user->password ; ?></td>
		</tr>

	<?php }?>
</table>