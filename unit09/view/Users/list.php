<?php require_once('header.php') ?>
        <div class="content-wrapper">
		<h3 class="text-center">--- USERS ---</h3>
		<a href="index.php?admin=admin&mod=user&act=add" class="btn btn-primary">Add New users</a>

		<?php echo (isset($_COOKIE['success'])?$_COOKIE['success']:'') ?>
        <?php echo (isset($_COOKIE['error'])?$_COOKIE['error']:'') ?>

		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				<th>Action</th>
			</thead>

			<?php 
			foreach ($users as $user) {
			
			
			?>
			<tr>
				<td><?= $user['id'] ?></td>
				<td><?= $user['name'] ?></td>
				<td><?= $user['email'] ?></td>
				<td>
					<a href="index.php?admin=admin&mod=user&act=detail&id=<?= $user['id'] ?>" class="btn btn-primary">Detail</a>
					<a href="index.php?admin=admin&mod=user&act=edit&id=<?= $user['id'] ?>" class="btn btn-success">Edit</a>
					<a href="index.php?admin=admin&mod=user&act=delete&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

<?php require_once('footer.php') ?>